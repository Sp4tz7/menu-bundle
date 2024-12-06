<?php
namespace Sp4tz\MenuBundle\Menu;

class MenuManager
{
    private array $menus;

    public function __construct(array $menus)
    {
        $this->menus = $menus;
    }

    public function getMenu(string $name): ?array
    {
        return $this->menus[$name] ?? null;
    }
}
