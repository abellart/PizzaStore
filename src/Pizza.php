<?php

abstract class Pizza
{
    public string $name;
    public string $sause;
    public array $toppings;

    public function prepare(): void
    {
        echo "Началась готовка пиццы " . $this->$name . PHP_EOL;
        echo "Добавлен соус " . $this->$sause . PHP_EOL;
        echo "Добавлены топики " . implode($this->$toppings) . PHP_EOL;
    }

    public function cut(): void
    {
        echo "Данную пиццу нарезают по диагонали" . PHP_EOL;
    }
}