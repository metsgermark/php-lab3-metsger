<?php
namespace App;

class MagicClass
{
    private array $data = [];

    // Вызывается при создании объекта
    public function __construct()
    {
        echo "__construct: объект создан\n";
    }

    // Вызывается при уничтожении объекта
    public function __destruct()
    {
        echo "__destruct: объект уничтожен\n";
    }

    // Чтение несуществующего свойства
    public function __get(string $name)
    {
        echo "__get: чтение свойства '$name'\n";
        return $this->data[$name] ?? null;
    }

    // Запись в несуществующее свойство
    public function __set(string $name, $value): void
    {
        echo "__set: запись в свойство '$name' = '$value'\n";
        $this->data[$name] = $value;
    }

    // Проверка isset() на несуществующем свойстве
    public function __isset(string $name): bool
    {
        echo "__isset: проверка свойства '$name'\n";
        return isset($this->data[$name]);
    }

    // Вызов unset() на несуществующем свойстве
    public function __unset(string $name): void
    {
        echo "__unset: удаление свойства '$name'\n";
        unset($this->data[$name]);
    }

    // Вызов несуществующего метода объекта
    public function __call(string $name, array $arguments)
    {
        echo "__call: вызов метода '$name' с аргументами: " . implode(', ', $arguments) . "\n";
    }

    // Вызов несуществующего статического метода
    public static function __callStatic(string $name, array $arguments)
    {
        echo "__callStatic: вызов статического метода '$name' с аргументами: " . implode(', ', $arguments) . "\n";
    }

    // Приведение объекта к строке (echo, конкатенация)
    public function __toString(): string
    {
        return "__toString: объект MagicClass\n";
    }

    // Вызов объекта как функции: $obj()
    public function __invoke($argument)
    {
        echo "__invoke: объект вызван как функция с аргументом $argument\n";
    }

    // Вызывается при clone объекта
    public function __clone()
    {
        echo "__clone: объект клонирован\n";
    }

    // Кастомный вывод для var_dump()
    public function __debugInfo(): array
    {
        echo "__debugInfo: вызван var_dump\n";
        return ['data' => $this->data, 'custom' => 'debug info'];
    }
}