@extends('layout')

@section('content')
<div class="flex h-[calc(100vh-80px)] bg-gray-50 dark:bg-gray-900">
    <!-- Sidebar -->
    <div class="hidden lg:flex lg:w-80 lg:flex-col border-r border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800">
        <!-- Sidebar Header -->
        <div class="p-4 border-b border-gray-200 dark:border-gray-700">
            <div class="flex items-center justify-between">
                <h2 class="text-lg font-semibold text-gray-900 dark:text-white">Conversations</h2>
                <button class="p-2 text-gray-400 hover:text-gray-600 dark:hover:text-gray-300 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Agent Selector -->
        <div class="p-4 border-b border-gray-200 dark:border-gray-700">
            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Select Agent</label>
            <select class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-brand-500 focus:border-brand-500 dark:bg-gray-700 dark:text-white text-sm">
                @foreach($agents as $agent)
                    <option value="{{ $agent['id'] }}" {{ $agent['id'] == $selectedAgentId ? 'selected' : '' }}>
                        {{ $agent['name'] }}
                    </option>
                @endforeach
            </select>
        </div>

        <!-- Conversation List -->
        <div class="flex-1 overflow-y-auto p-4">
            <div class="space-y-2">
                @foreach($threads as $thread)
                <div class="p-3 rounded-lg border border-gray-200 dark:border-gray-600 hover:bg-gray-50 dark:hover:bg-gray-700 cursor-pointer {{ $thread['id'] == $currentThreadId ? 'bg-brand-50 dark:bg-brand-900/20 border-brand-200 dark:border-brand-700' : '' }}">
                    <div class="flex items-start justify-between">
                        <div class="flex-1 min-w-0">
                            <h3 class="font-medium text-gray-900 dark:text-white text-sm truncate">{{ $thread['title'] }}</h3>
                            <p class="text-xs text-gray-500 dark:text-gray-400 mt-1">{{ $thread['agent_name'] }}</p>
                            <div class="flex items-center mt-2 text-xs text-gray-400">
                                <span>{{ $thread['message_count'] }} messages</span>
                                <span class="mx-1">•</span>
                                <span>{{ $thread['last_message_at'] }}</span>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Main Chat Area -->
    <div class="flex-1 flex flex-col">
        <!-- Chat Header -->
        <div class="bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700 p-4">
            <div class="flex items-center justify-between">
                <div class="flex items-center space-x-3">
                    <div class="w-8 h-8 bg-brand-500 rounded-lg flex items-center justify-center">
                        <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path>
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-900 dark:text-white">{{ $selectedAgent['name'] }}</h3>
                        <p class="text-sm text-gray-500 dark:text-gray-400">{{ $selectedAgent['model'] }}</p>
                    </div>
                </div>
                <div class="flex items-center space-x-2">
                    <span class="inline-flex items-center px-2 py-1 rounded-full text-xs bg-success-100 dark:bg-success-900/20 text-success-700 dark:text-success-400">
                        <div class="w-1.5 h-1.5 bg-success-500 rounded-full mr-1"></div>
                        Online
                    </span>
                </div>
            </div>
        </div>

        <!-- Messages Area -->
        <div class="flex-1 overflow-y-auto p-4 space-y-4">
            @foreach($messages as $message)
                @if($message['role'] === 'assistant')
                <div class="flex items-start space-x-3">
                    <div class="w-8 h-8 bg-brand-500 rounded-lg flex items-center justify-center flex-shrink-0">
                        <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path>
                        </svg>
                    </div>
                    <div class="flex-1">
                        <div class="bg-white dark:bg-gray-800 rounded-lg border border-gray-200 dark:border-gray-700 p-4">
                            <p class="text-gray-900 dark:text-white">{{ $message['content'] }}</p>
                        </div>
                        <div class="mt-1 text-xs text-gray-500 dark:text-gray-400 ml-1">
                            {{ $selectedAgent['name'] }} • {{ $message['timestamp']->diffForHumans() }}
                        </div>
                    </div>
                </div>
                @elseif($message['role'] === 'user')
                <div class="flex items-start space-x-3 flex-row-reverse">
                    <div class="w-8 h-8 bg-gray-400 rounded-lg flex items-center justify-center flex-shrink-0">
                        <span class="text-xs font-medium text-white">{{ strtoupper(substr(auth()->user()->name, 0, 1)) }}</span>
                    </div>
                    <div class="flex-1">
                        <div class="bg-brand-500 rounded-lg p-4 text-right">
                            <p class="text-white">{{ $message['content'] }}</p>
                        </div>
                        <div class="mt-1 text-xs text-gray-500 dark:text-gray-400 mr-1 text-right">
                            You • {{ $message['timestamp']->diffForHumans() }}
                        </div>
                    </div>
                </div>
                @endif
            @endforeach
        </div>

        <!-- Message Input -->
        <div class="bg-white dark:bg-gray-800 border-t border-gray-200 dark:border-gray-700 p-4">
            <form class="flex items-end space-x-3" x-data="{ message: '', sending: false }">
                <div class="flex-1">
                    <textarea
                        x-model="message"
                        @keydown.enter.prevent="if (!$event.shiftKey) { $refs.submitBtn.click(); }"
                        rows="1"
                        class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-brand-500 focus:border-brand-500 dark:bg-gray-700 dark:text-white resize-none"
                        placeholder="Type your message... (Enter to send, Shift+Enter for new line)"
                        style="min-height: 48px; max-height: 120px;"
                        x-init="$el.style.height = '48px'; $watch('message', () => { $el.style.height = '48px'; $el.style.height = $el.scrollHeight + 'px'; })"
                    ></textarea>
                </div>
                <div class="flex items-center space-x-2">
                    <button
                        type="button"
                        class="p-3 text-gray-400 hover:text-gray-600 dark:hover:text-gray-300 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13"></path>
                        </svg>
                    </button>
                    <button
                        x-ref="submitBtn"
                        type="submit"
                        :disabled="!message.trim() || sending"
                        :class="message.trim() && !sending ? 'bg-brand-500 hover:bg-brand-600 text-white' : 'bg-gray-200 dark:bg-gray-700 text-gray-400 cursor-not-allowed'"
                        class="p-3 rounded-lg transition-colors">
                        <svg x-show="!sending" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                        </svg>
                        <svg x-show="sending" class="w-5 h-5 animate-spin" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path>
                        </svg>
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Mobile Sidebar Toggle -->
    <div class="lg:hidden fixed bottom-4 left-4 z-50">
        <button class="p-3 bg-brand-500 text-white rounded-full shadow-lg hover:bg-brand-600 transition-colors">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
            </svg>
        </button>
    </div>
</div>
@endsection
