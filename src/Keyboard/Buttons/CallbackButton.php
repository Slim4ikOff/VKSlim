<?php
/**
 * Created by Alexey Gaydarly
 * VK: vk.com/id177076922
 * Telegram: t.me/foXXXy_svk
 * Email: prophotosv@gmail.com
 */

namespace VkSlim\Keyboard\Buttons;

class CallbackButton implements ButtonInterface {
    private array $action = [];

    public function __construct(string $label, string $color = 'secondary', array $payload = []) {
        $this->action = [
            'action' => [
                'type' => 'callback',
                'label' => mb_strimwidth($label, 0, 35, "..."),
            ],
            'color' => $color
        ];

        if(!empty($payload)) {
            $this->action['action']['payload'] = json_encode($payload, JSON_UNESCAPED_UNICODE);
        }
    }

    public function get(): array {
        return $this->action;
    }
}