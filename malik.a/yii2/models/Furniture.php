<?php

namespace app\models;

use yii\web\UploadedFile;
use yii\helpers\FileHelper;
use yii\behaviors\TimestampBehavior;

use Yii;

/**
 * This is the model class for table "furniture".
 *
 * @property int $id
 * @property string $name
 * @property string|null $description
 * @property int|null $category_id
 * @property float|null $price
 * @property string|null $created_at
 * @property string|null $updated_at
 *
 * @property Category $category
 * @property OrderItem[] $orderItems
 */
class Furniture extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'furniture';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['description'], 'string'],
            [['category_id'], 'integer'],
            [['price'], 'number'],
            [['created_at', 'updated_at'], 'safe'],
            [['name'], 'string', 'max' => 255],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => Category::class, 'targetAttribute' => ['category_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'description' => 'Description',
            'category_id' => 'Category ID',
            'price' => 'Price',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * Gets query for [[Category]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Category::class, ['id' => 'category_id']);
    }

    /**
     * Gets query for [[OrderItems]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOrderItems()
    {
        return $this->hasMany(OrderItem::class, ['furniture_id' => 'id']);
    }
	
	public $imageFile; // Новый атрибут для хранения загруженного файла изображения
	
	public function upload()
    {
        $uploadPath = Yii::getAlias('@webroot/uploads/');
        FileHelper::createDirectory($uploadPath);

        $fileName = 'furniture_' . $this->id . '.' . $this->imageFile->extension;
        $filePath = $uploadPath . $fileName;

        if ($this->imageFile->saveAs($filePath)) {
            $this->image = $fileName;
            $this->save();
            return true;
        } else {
            return false;
        }
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
