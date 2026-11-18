<?php
namespace App;

// Вектор на плоскости с компонентами (x, y)
class Vector
{
    public float $x;
    public float $y;

    public function __construct(float $x, float $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    // Длина вектора: |V| = √(x² + y²)
    public function length(): float
    {
        return sqrt($this->x ** 2 + $this->y ** 2);
    }

    // Проверка на нулевой вектор (0, 0)
    public function isZero(): bool
    {
        return $this->x == 0 && $this->y == 0;
    }

    // Перпендикулярность через скалярное произведение (равно 0)
    public function isPerpendicularTo(Vector $other): bool
    {
        $dotProduct = $this->x * $other->x + $this->y * $other->y;
        return $dotProduct == 0;
    }

    // Форматирование для echo
    public function __toString(): string
    {
        return "Vector({$this->x}, {$this->y})";
    }
}