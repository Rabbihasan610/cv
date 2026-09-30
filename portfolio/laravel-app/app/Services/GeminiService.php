<?php

namespace App\Services;

use GeminiAPI\Client;
use GeminiAPI\Resources\Parts\TextPart;
use Illuminate\Support\Facades\Log;

class GeminiService
{
    protected Client $client;

    public function __construct()
    {
        $apiKey = env('GEMINI_API_KEY', '');
        $this->client = new Client($apiKey);
    }

    /**
     * Generate a complete SEO-optimized blog post on a topic.
     */
    public function generateBlogPost(string $topic): string
    {
        try {
            $prompt = "Write a comprehensive, SEO-optimized technical blog post about: {$topic}. Format it in HTML, starting with an <h1>. Include subheadings, code snippets if relevant, and professional developer insights.";
            
            $response = $this->client->geminiPro()->generateContent(
                new TextPart($prompt)
            );

            return $response->text();
        } catch (\Exception $e) {
            Log::error('Gemini Blog Generation Failed: ' . $e->getMessage());
            return "Error generating content. Please check logs and API key.";
        }
    }

    /**
     * Check spelling and grammar for provided text.
     */
    public function checkSpelling(string $text): string
    {
        try {
            $prompt = "Please correct the spelling and grammar of the following text, and return ONLY the corrected text: \n\n" . $text;
            
            $response = $this->client->geminiPro()->generateContent(
                new TextPart($prompt)
            );

            return $response->text();
        } catch (\Exception $e) {
            Log::error('Gemini Spell Check Failed: ' . $e->getMessage());
            return $text;
        }
    }

    /**
     * Formulate an auto-reply for customer support based on their message.
     */
    public function generateAutoReply(string $customerMessage): string
    {
        try {
            $prompt = "You are an AI assistant for a Senior Laravel & PHP Developer. Write a professional, polite, and helpful auto-reply to the following message from a potential client. Do not make any promises on price or timeline, just acknowledge their message and say the developer will review it shortly. \n\nClient Message:\n" . $customerMessage;
            
            $response = $this->client->geminiPro()->generateContent(
                new TextPart($prompt)
            );

            return $response->text();
        } catch (\Exception $e) {
            Log::error('Gemini Auto Reply Failed: ' . $e->getMessage());
            return "Thank you for reaching out! I have received your message and will get back to you shortly.";
        }
    }
}
