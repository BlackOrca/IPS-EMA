<?php

declare(strict_types=1);
class AlarmSystem extends IPSModule
{
    public function Create()
    {
        //Never delete this line!
        parent::Create();

		$this->RegisterPropertyString('SensorsForFullSet', '[]');

		$this->RegisterVariableBoolean('Active', $this->Translate('Active'), '~Switch', 10);
		$this->EnableAction('Active');
    }

    public function Destroy()
    {
        //Never delete this line!
        parent::Destroy();
    }

    public function ApplyChanges()
    {
        //Never delete this line!
        parent::ApplyChanges();
    }
}
