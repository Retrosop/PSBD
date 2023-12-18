<?php

namespace app\models;

use yii\behaviors\TimestampBehavior;

use Yii;

/**
 * This is the model class for table "order_item".
 *
 * @property int $id
 * @property int|null $order_id
 * @property int|null $furniture_id
 * @property int $quantity
 * @property float $unit_price
 * @property float $subtotal
 *
 * @property Furniture $furniture
 * @property Order $order
 */
class OrderItem extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'order_item';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['order_id', 'furniture_id', 'quantity'], 'integer'],
            [['quantity', 'unit_price', 'subtotal'], 'required'],
            [['unit_price', 'subtotal'], 'number'],
            [['order_id'], 'exist', 'skipOnError' => true, 'targetClass' => Order::class, 'targetAttribute' => ['order_id' => 'id']],
            [['furniture_id'], 'exist', 'skipOnError' => true, 'targetClass' => Furniture::class, 'targetAttribute' => ['furniture_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'order_id' => 'Order ID',
            'furniture_id' => 'Furniture ID',
            'quantity' => 'Quantity',
            'unit_price' => 'Unit Price',
            'subtotal' => 'Subtotal',
        ];
    }

    /**
     * Gets query for [[Furniture]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFurniture()
    {
        return $this->hasOne(Furniture::class, ['id' => 'furniture_id']);
    }

    /**
     * Gets query for [[Order]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOrder()
    {
        return $this->hasOne(Order::class, ['id' => 'order_id']);
    }
	
	public function behaviors()
    {
        return [
            'timestamp' => [
                'class' => TimestampBehavior::class,
                'createdAtAttribute' => 'created_at',
                'updatedAtAttribute' => 'updated_at',
                'value' => new \yii\db\Expression('NOW()'),
            ],
        ];
    }
}
