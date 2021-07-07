<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Clinica".
 *
 * @property int $Clinica_id
 * @property string $Nome
 * @property string|null $CEP
 * @property string|null $Endereco
 * @property string|null $Bairro
 * @property string|null $Cidade
 * @property string|null $UF
 * @property int|null $ibge
 * @property string|null $Imagem
 * @property string|null $email
 * @property string|null $telefone
 * @property string|null $criado_em
 * @property string|null $atualizado_em
 * @property int|null $status
 *
 * @property MedicoHasEspecialidades[] $medicoHasEspecialidades
 */
class Clinica extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Clinica';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Nome'], 'required'],
            [['ibge', 'status'], 'integer'],
            [['criado_em', 'atualizado_em'], 'safe'],
            [['Nome', 'Endereco', 'Cidade', 'Imagem'], 'string', 'max' => 145],
            [['CEP'], 'string', 'max' => 10],
            [['Bairro'], 'string', 'max' => 60],
            [['UF'], 'string', 'max' => 2],
            [['email', 'telefone'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Clinica_id' => Yii::t('app', 'Clinica ID'),
            'Nome' => Yii::t('app', 'Nome'),
            'CEP' => Yii::t('app', 'Cep'),
            'Endereco' => Yii::t('app', 'Endereco'),
            'Bairro' => Yii::t('app', 'Bairro'),
            'Cidade' => Yii::t('app', 'Cidade'),
            'UF' => Yii::t('app', 'Uf'),
            'ibge' => Yii::t('app', 'Ibge'),
            'Imagem' => Yii::t('app', 'Imagem'),
            'email' => Yii::t('app', 'Email'),
            'telefone' => Yii::t('app', 'Telefone'),
            'criado_em' => Yii::t('app', 'Criado Em'),
            'atualizado_em' => Yii::t('app', 'Atualizado Em'),
            'status' => Yii::t('app', 'Status'),
        ];
    }

    /**
     * Gets query for [[MedicoHasEspecialidades]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMedicoHasEspecialidades()
    {
        return $this->hasMany(MedicoHasEspecialidades::className(), ['Clinica_id' => 'Clinica_id']);
    }
}
