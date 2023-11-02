<?php

declare(strict_types=1);

require_once __DIR__ . '/../libs/SymconModulHelper/VariableProfileHelper.php';

class AlarmSystem extends IPSModule
{
    public function Create()
    {
        //Never delete this line!
        parent::Create();

		$this->RegisterPropertyString('SensorsForFullSet', '[]');

		$this->RegisterProfileIntegerEx('EMA.SetModes', '', '', '', [[0, $this->Translate('Unset'), '', ''],[1, $this->Translate('Part Set'), '', ''],[2, $this->Translate('Full Set'), '', '']], 2, 1);

		$this->RegisterVariableInteger('Set State', $this->Translate('Set State'), 'EMA.SetModes', 10);

		$this->EnableAction('Set State');
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
