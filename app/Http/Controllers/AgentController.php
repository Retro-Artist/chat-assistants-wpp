<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgentController extends Controller
{
    /**
     * Show the agents management page.
     */
    public function index()
    {
        // Mock agents data
        $agents = [
            [
                'id' => 1,
                'name' => 'Code Assistant',
                'instructions' => 'You are a helpful programming assistant. You specialize in PHP, JavaScript, and web development. Provide clear, well-commented code examples and explain programming concepts thoroughly.',
                'model' => 'gpt-4o-mini',
                'tools' => ['Math'],
                'is_active' => true,
                'created_at' => now()->subWeek(),
                'updated_at' => now()->subDay()
            ],
            [
                'id' => 2,
                'name' => 'Research Helper',
                'instructions' => 'You are a research assistant who helps gather information and analyze data. You can search the web and perform calculations to provide comprehensive answers.',
                'model' => 'gpt-4o-mini',
                'tools' => ['Search', 'Math'],
                'is_active' => true,
                'created_at' => now()->subWeek(),
                'updated_at' => now()->subDays(2)
            ],
            [
                'id' => 3,
                'name' => 'Weather Assistant',
                'instructions' => 'You are a helpful weather assistant. You can provide current weather information for any location and help with weather-related planning.',
                'model' => 'gpt-4o-mini',
                'tools' => ['Weather'],
                'is_active' => true,
                'created_at' => now()->subWeek(),
                'updated_at' => now()->subDays(3)
            ],
            [
                'id' => 4,
                'name' => 'Creative Writer',
                'instructions' => 'You are a creative writing assistant. Help users with storytelling, poetry, creative content, and writing improvement suggestions.',
                'model' => 'gpt-4o',
                'tools' => [],
                'is_active' => false,
                'created_at' => now()->subDays(10),
                'updated_at' => now()->subDays(5)
            ]
        ];

        // Available tools
        $availableTools = [
            'Math' => 'Mathematical calculations and computations',
            'Search' => 'Web search and information retrieval',
            'Weather' => 'Weather information and forecasts',
            'Calendar' => 'Calendar and scheduling operations',
            'Email' => 'Email composition and management'
        ];

        // Available models
        $availableModels = [
            'gpt-4o' => 'GPT-4 Omni - Most capable model',
            'gpt-4o-mini' => 'GPT-4 Omni Mini - Fast and efficient',
            'gpt-4-turbo' => 'GPT-4 Turbo - High performance',
            'gpt-3.5-turbo' => 'GPT-3.5 Turbo - Cost effective'
        ];

        // Stats
        $stats = [
            'total_agents' => count($agents),
            'active_agents' => count(array_filter($agents, fn($agent) => $agent['is_active'])),
            'inactive_agents' => count(array_filter($agents, fn($agent) => !$agent['is_active'])),
            'total_conversations' => 24
        ];

        return view('agents', [
            'title' => 'Agents - OpenAI Webchat',
            'pageTitle' => 'AI Agents',
            'agents' => $agents,
            'availableTools' => $availableTools,
            'availableModels' => $availableModels,
            'stats' => $stats
        ]);
    }
}
