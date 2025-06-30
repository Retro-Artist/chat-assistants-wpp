<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Show the dashboard.
     */
    public function index()
    {
        // Mock data for now - we'll replace this with real data later
        $stats = [
            'total_chats' => 12,
            'active_agents' => 3,
            'messages_today' => 45,
            'total_messages' => 156
        ];

        // Mock chart data for conversations over time
        $conversationChartData = [
            'labels' => ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
            'data' => [2, 5, 3, 8, 4, 6, 7]
        ];

        // Mock recent conversations
        $recentConversations = [
            [
                'id' => 1,
                'title' => 'Code Review Help',
                'agent_name' => 'Code Assistant',
                'last_message' => 'Sure! I can help you review that PHP code...',
                'updated_at' => '2 hours ago',
                'message_count' => 8
            ],
            [
                'id' => 2,
                'title' => 'Weather Planning',
                'agent_name' => 'Weather Assistant',
                'last_message' => 'The weather looks great for your outdoor event...',
                'updated_at' => '1 day ago',
                'message_count' => 5
            ],
            [
                'id' => 3,
                'title' => 'Research Project',
                'agent_name' => 'Research Helper',
                'last_message' => 'I found several relevant studies on that topic...',
                'updated_at' => '2 days ago',
                'message_count' => 12
            ]
        ];

        // Mock agents
        $agents = [
            [
                'id' => 1,
                'name' => 'Code Assistant',
                'instructions' => 'Programming and development helper',
                'is_active' => true,
                'created_at' => '1 week ago'
            ],
            [
                'id' => 2,
                'name' => 'Research Helper',
                'instructions' => 'Research and analysis assistant',
                'is_active' => true,
                'created_at' => '1 week ago'
            ],
            [
                'id' => 3,
                'name' => 'Weather Assistant',
                'instructions' => 'Weather information and planning',
                'is_active' => true,
                'created_at' => '1 week ago'
            ]
        ];

        return view('dashboard', [
            'title' => 'Dashboard - OpenAI Webchat',
            'pageTitle' => 'Dashboard',
            'stats' => $stats,
            'conversationChartData' => $conversationChartData,
            'recentConversations' => $recentConversations,
            'agents' => $agents
        ]);
    }
}
