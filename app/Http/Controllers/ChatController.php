<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChatController extends Controller
{
    /**
     * Show the chat interface.
     */
    public function index()
    {
        // Mock agents for selection
        $agents = [
            [
                'id' => 1,
                'name' => 'Code Assistant',
                'instructions' => 'You are a helpful programming assistant. You specialize in PHP, JavaScript, and web development.',
                'model' => 'gpt-4o-mini',
                'is_active' => true
            ],
            [
                'id' => 2,
                'name' => 'Research Helper',
                'instructions' => 'You are a research assistant who helps gather information and analyze data.',
                'model' => 'gpt-4o-mini',
                'is_active' => true
            ],
            [
                'id' => 3,
                'name' => 'Weather Assistant',
                'instructions' => 'You are a helpful weather assistant. You can provide current weather information.',
                'model' => 'gpt-4o-mini',
                'is_active' => true
            ]
        ];

        // Mock chat threads
        $threads = [
            [
                'id' => 1,
                'title' => 'Welcome to OpenAI Webchat',
                'agent_id' => 1,
                'agent_name' => 'Code Assistant',
                'message_count' => 2,
                'last_message_at' => '2 hours ago',
                'updated_at' => now()->subHours(2)
            ],
            [
                'id' => 2,
                'title' => 'Weather Planning',
                'agent_id' => 3,
                'agent_name' => 'Weather Assistant',
                'message_count' => 5,
                'last_message_at' => '1 day ago',
                'updated_at' => now()->subDay()
            ]
        ];

        // Mock messages for current thread
        $messages = [
            [
                'role' => 'system',
                'content' => 'You are a helpful AI assistant.',
                'timestamp' => now()->subHours(2)
            ],
            [
                'role' => 'assistant',
                'content' => 'Hello! Welcome to OpenAI Webchat. I am your AI assistant. How can I help you today?',
                'timestamp' => now()->subHours(2)->addMinute()
            ]
        ];

        return view('chat', [
            'title' => 'Chat - OpenAI Webchat',
            'pageTitle' => 'AI Chat',
            'agents' => $agents,
            'threads' => $threads,
            'messages' => $messages,
            'selectedAgentId' => 1, // Default to first agent
            'currentThreadId' => 1, // Default to first thread
            'selectedAgent' => $agents[0] // Default agent object
        ]);
    }
}
