<?php
Yii::import('application.extensions.wikiext.wikiext');

/**
 * This is the model class for table "tbl_wikis".
 *
 * The followings are the available columns in table 'tbl_wikis':
 * @property string $id
 * @property string $title
 * @property string $content
 * @property string $create_time
 * @property integer $create_user_id
 * @property string $update_time
 * @property integer $update_user_id
 */
class Wiki extends LearnTrackActiveRecord
{
    const HOMEPAGE_TITLE = 'home';
    
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Wiki the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	
	/**
	 * Init wiki homepage
	 *
	 * @return Wiki
	 */
	public static function initHomepage()
	{
	    $homepage = Wiki::model()->find('title=:title', array(':title'=>self::HOMEPAGE_TITLE));
	    if (null == $homepage)
	    {
	        $homepage = new Wiki();
	        $homepage->setAttributes(array(
	           'title' => self::HOMEPAGE_TITLE ,
	           'content' => 'Hello, Wiki!',
	        ));
	        if (!$homepage->save())
	           throw new CException('Cannot init wiki homepage.');
	    }
	    
	    return $homepage;
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_wikis';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('title, content', 'required'),
			array('title', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, title, content, create_time, create_user_id, update_time, update_user_id', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'title' => 'Title',
			'content' => 'Content',
			'create_time' => 'Create Time',
			'create_user_id' => 'Create User',
			'update_time' => 'Update Time',
			'update_user_id' => 'Update User',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id,true);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('content',$this->content,true);
		$criteria->compare('create_time',$this->create_time,true);
		$criteria->compare('create_user_id',$this->create_user_id);
		$criteria->compare('update_time',$this->update_time,true);
		$criteria->compare('update_user_id',$this->update_user_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	public function parseContent()
	{
	    $options = array(
	       'link_format' => Yii::app()->createUrl('wiki/show', array('title'=>'%s')),
	    );
	    $wiki=new wikiext($options);
		return $wiki->parse($this->content);
	}
}