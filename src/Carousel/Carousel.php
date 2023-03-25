<?php
/**
 * Created by Alexey Gaydarly
 * VK: vk.com/id177076922
 * Telegram: t.me/foXXXy_svk
 * Email: prophotosv@gmail.com
 */

namespace VkSlim\Carousel;

use VkSlim\Carousel\Elements\Photo;
use VkSlim\Carousel\Elements\Text;

class Carousel {

    private array $carousel = [];

    public function create(): static {
        $this->carousel = [
            "type" => "carousel",
            "elements" => []
        ];

        return $this;
    }

    public function elements(Text|Photo $element): static {
        $this->carousel['elements'][] = $element;
        return $this;
    }

    public function json(): string {
        return json_encode($this->carousel, JSON_UNESCAPED_UNICODE);
    }

}