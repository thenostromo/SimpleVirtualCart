<?php
namespace Entity;

class CartItem
{
    /**
     * @var int
     */
    private $userId;

    /**
     * @var int
     */
    private $productId;

    /**
     * @var int
     */
    private $quantity;

    /**
     * @param int $userId
     * @return CartItem
     */
    public function setUserId(int $userId): CartItem
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * @return string
     */
    public function getUserId(): string
    {
        return $this->userId;
    }

    /**
     * @param int $productId
     * @return CartItem
     */
    public function setProductId(int $productId): CartItem
    {
        $this->productId = $productId;
        return $this;
    }

    /**
     * @return int
     */
    public function getProductId(): int
    {
        return $this->productId;
    }

    /**
     * @param int $quantity
     * @return CartItem
     */
    public function setQuantity(int $quantity): CartItem
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * @return string
     */
    public function getQuantity(): string
    {
        return $this->quantity;
    }
}
