<?php declare(strict_types=1);

namespace Model\Board;
use Model\Slot\ISlot;

interface IBoard {
    public function getHeight(): int;
    public function getSlot(int $x, int $y): ISlot;
    /** @return ISlot[][] */
    public function getSlots(): array;
    public function getWidth(): int;
    public function tryGetEmptySlot(): ?ISlot;
    public function tryGetSlot(int $x, int $y): ?ISlot;
}