<?php
namespace App;

// Точка на плоскости с координатами (x, y)
class Point
{
    public float $x;
    public float $y;

    public function __construct(float $x, float $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    // Сдвиг точки по оси X
    public function moveX(float $dx): void
    {
        $this->x += $dx;
    }

    // Сдвиг точки по оси Y
    public function moveY(float $dy): void
    {
        $this->y += $dy;
    }

    // Форматирование для echo
    public function __toString(): string
    {
        return "Point({$this->x}, {$this->y})";
    }
}