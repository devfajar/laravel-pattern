<?php

namespace App\Repositories\Interfaces;

interface OrderRepositoryInterface
{
    public function getOrderById($orderId);
    public function deleteOrder($orderId);
    public function createOrder(array $orderDetails);
    public function updateOrder($orderId, array $newDetails);
    public function getFulfilledOrders();
}
