<?php

declare(strict_types=1);
require_once __DIR__ . '/../libs/VariableProfileHelper.php';

	class PontosBase extends IPSModule
	{
		use VariableProfileHelper;
		public function Create()
		{
			//Never delete this line!
			parent::Create();
			$this->RegisterPropertyString('IPAddress', '');
			$this->RegisterPropertyString('Modell', 'hansgrohe');
			$this->RegisterAttributeString('URI', '');
			$this->RegisterAttributeBoolean('FirstRunDone', false);

			$this->RegisterAttributeBoolean('AdminMode', false);
			
			$this->RegisterPropertyInteger('getSRN', 0);
			$this->RegisterPropertyBoolean('getSRNbool', false);
			$this->RegisterPropertystring('getVER', '');
			$this->RegisterPropertyBoolean('getVERbool', false);
			$this->RegisterPropertyInteger('getTYP', 0);
			$this->RegisterPropertyBoolean('getTYPbool', false);
			$this->RegisterPropertystring('getCNO', '');
			$this->RegisterPropertyBoolean('getCNObool', false);
			$this->RegisterPropertystring('getMAC', '');
			$this->RegisterPropertyBoolean('getMACbool', false);
			$this->RegisterPropertyInteger('getPRF', 0);
			$this->RegisterPropertyBoolean('getPRFbool', false);
			$this->RegisterPropertyInteger('getPRN', 0);
			$this->RegisterPropertyBoolean('getPRNbool', false);
			$this->RegisterPropertystring('getPN1', '');
			$this->RegisterPropertyBoolean('getPN1bool', false);
			$this->RegisterPropertyInteger('getPV1', 0);
			$this->RegisterPropertyBoolean('getPV1bool', false);
			$this->RegisterPropertyInteger('getPT1', 0);
			$this->RegisterPropertyBoolean('getPT1bool', false);
			$this->RegisterPropertyInteger('getPF1', 0);
			$this->RegisterPropertyBoolean('getPF1bool', false);
			$this->RegisterPropertyInteger('getPM1', 0);
			$this->RegisterPropertyBoolean('getPM1bool', false);
			$this->RegisterPropertyInteger('getPR1', 0);
			$this->RegisterPropertyBoolean('getPR1bool', false);
			$this->RegisterPropertyInteger('getPB1', 0);
			$this->RegisterPropertyBoolean('getPB1bool', false);
			$this->RegisterPropertystring('getPN2', '');
			$this->RegisterPropertyBoolean('getPN2bool', false);
			$this->RegisterPropertyInteger('getPV2', 0);
			$this->RegisterPropertyBoolean('getPV2bool', false);
			$this->RegisterPropertyInteger('getPT2', 0);
			$this->RegisterPropertyBoolean('getPT2bool', false);
			$this->RegisterPropertyInteger('getPF2', 0);
			$this->RegisterPropertyBoolean('getPF2bool', false);
			$this->RegisterPropertyInteger('getPM2', 0);
			$this->RegisterPropertyBoolean('getPM2bool', false);
			$this->RegisterPropertyInteger('getPR2', 0);
			$this->RegisterPropertyBoolean('getPR2bool', false);
			$this->RegisterPropertyInteger('getPB2', 0);
			$this->RegisterPropertyBoolean('getPB2bool', false);
			$this->RegisterPropertystring('getPN3', '');
			$this->RegisterPropertyBoolean('getPN3bool', false);
			$this->RegisterPropertyInteger('getPV3', 0);
			$this->RegisterPropertyBoolean('getPV3bool', false);
			$this->RegisterPropertyInteger('getPT3', 0);
			$this->RegisterPropertyBoolean('getPT3bool', false);
			$this->RegisterPropertyInteger('getPF3', 0);
			$this->RegisterPropertyBoolean('getPF3bool', false);
			$this->RegisterPropertyInteger('getPM3', 0);
			$this->RegisterPropertyBoolean('getPM3bool', false);
			$this->RegisterPropertyInteger('getPR3', 0);
			$this->RegisterPropertyBoolean('getPR3bool', false);
			$this->RegisterPropertyInteger('getPB3', 0);
			$this->RegisterPropertyBoolean('getPB3bool', false);
			$this->RegisterPropertystring('getPN4', '');
			$this->RegisterPropertyBoolean('getPN4bool', false);
			$this->RegisterPropertyInteger('getPV4', 0);
			$this->RegisterPropertyBoolean('getPV4bool', false);
			$this->RegisterPropertyInteger('getPT4', 0);
			$this->RegisterPropertyBoolean('getPT4bool', false);
			$this->RegisterPropertyInteger('getPF4', 0);
			$this->RegisterPropertyBoolean('getPF4bool', false);
			$this->RegisterPropertyInteger('getPM4', 0);
			$this->RegisterPropertyBoolean('getPM4bool', false);
			$this->RegisterPropertyInteger('getPR4', 0);
			$this->RegisterPropertyBoolean('getPR4bool', false);
			$this->RegisterPropertyInteger('getPB4', 0);
			$this->RegisterPropertyBoolean('getPB4bool', false);
			$this->RegisterPropertystring('getPN5', '');
			$this->RegisterPropertyBoolean('getPN5bool', false);
			$this->RegisterPropertyInteger('getPV5', 0);
			$this->RegisterPropertyBoolean('getPV5bool', false);
			$this->RegisterPropertyInteger('getPT5', 0);
			$this->RegisterPropertyBoolean('getPT5bool', false);
			$this->RegisterPropertyInteger('getPF5', 0);
			$this->RegisterPropertyBoolean('getPF5bool', false);
			$this->RegisterPropertyInteger('getPM5', 0);
			$this->RegisterPropertyBoolean('getPM5bool', false);
			$this->RegisterPropertyInteger('getPR5', 0);
			$this->RegisterPropertyBoolean('getPR5bool', false);
			$this->RegisterPropertyInteger('getPB5', 0);
			$this->RegisterPropertyBoolean('getPB5bool', false);
			$this->RegisterPropertystring('getPN6', '');
			$this->RegisterPropertyBoolean('getPN6bool', false);
			$this->RegisterPropertyInteger('getPV6', 0);
			$this->RegisterPropertyBoolean('getPV6bool', false);
			$this->RegisterPropertyInteger('getPT6', 0);
			$this->RegisterPropertyBoolean('getPT6bool', false);
			$this->RegisterPropertyInteger('getPF6', 0);
			$this->RegisterPropertyBoolean('getPF6bool', false);
			$this->RegisterPropertyInteger('getPM6', 0);
			$this->RegisterPropertyBoolean('getPM6bool', false);
			$this->RegisterPropertyInteger('getPR6', 0);
			$this->RegisterPropertyBoolean('getPR6bool', false);
			$this->RegisterPropertyInteger('getPB6', 0);
			$this->RegisterPropertyBoolean('getPB6bool', false);
			$this->RegisterPropertystring('getPN7', '');
			$this->RegisterPropertyBoolean('getPN7bool', false);
			$this->RegisterPropertyInteger('getPV7', 0);
			$this->RegisterPropertyBoolean('getPV7bool', false);
			$this->RegisterPropertyInteger('getPT7', 0);
			$this->RegisterPropertyBoolean('getPT7bool', false);
			$this->RegisterPropertyInteger('getPF7', 0);
			$this->RegisterPropertyBoolean('getPF7bool', false);
			$this->RegisterPropertyInteger('getPM7', 0);
			$this->RegisterPropertyBoolean('getPM7bool', false);
			$this->RegisterPropertyInteger('getPR7', 0);
			$this->RegisterPropertyBoolean('getPR7bool', false);
			$this->RegisterPropertyInteger('getPB7', 0);
			$this->RegisterPropertyBoolean('getPB7bool', false);
			$this->RegisterPropertystring('getPN8', '');
			$this->RegisterPropertyBoolean('getPN8bool', false);
			$this->RegisterPropertyInteger('getPV8', 0);
			$this->RegisterPropertyBoolean('getPV8bool', false);
			$this->RegisterPropertyInteger('getPT8', 0);
			$this->RegisterPropertyBoolean('getPT8bool', false);
			$this->RegisterPropertyInteger('getPF8', 0);
			$this->RegisterPropertyBoolean('getPF8bool', false);
			$this->RegisterPropertyInteger('getPM8', 0);
			$this->RegisterPropertyBoolean('getPM8bool', false);
			$this->RegisterPropertyInteger('getPR8', 0);
			$this->RegisterPropertyBoolean('getPR8bool', false);
			$this->RegisterPropertyInteger('getPB8', 0);
			$this->RegisterPropertyBoolean('getPB8bool', false);
			$this->RegisterPropertyInteger('getTMP', 0);
			$this->RegisterPropertyBoolean('getTMPbool', false);
			$this->RegisterPropertyInteger('getVLV', 0);
			$this->RegisterPropertyBoolean('getVLVbool', false);
			$this->RegisterPropertyInteger('getCEL', 0);
			$this->RegisterPropertyBoolean('getCELbool', false);
			$this->RegisterPropertyInteger('getBAR', 0);
			$this->RegisterPropertyBoolean('getBARbool', false);
			$this->RegisterPropertyInteger('getNPS', 0);
			$this->RegisterPropertyBoolean('getNPSbool', false);
			$this->RegisterPropertystring('getALA', '');
			$this->RegisterPropertyBoolean('getALAbool', false);
			$this->RegisterPropertystring('getALM', '');
			$this->RegisterPropertyBoolean('getALMbool', false);
			$this->RegisterPropertyInteger('getDMA', 0);
			$this->RegisterPropertyBoolean('getDMAbool', false);
			$this->RegisterPropertystring('getAVO', '');
			$this->RegisterPropertyBoolean('getAVObool', false);
			$this->RegisterPropertystring('getVOL', '');
			$this->RegisterPropertyBoolean('getVOLbool', false);
			$this->RegisterPropertyInteger('get71', 0);
			$this->RegisterPropertyBoolean('get71bool', false);
			$this->RegisterPropertyFloat('getBAT', 0);
			$this->RegisterPropertyBoolean('getBATbool', false);
			$this->RegisterPropertyFloat('getNET', 0);
			$this->RegisterPropertyBoolean('getNETbool', false);
			$this->RegisterPropertyInteger('getBUZ', 0);
			$this->RegisterPropertyBoolean('getBUZbool', false);
			$this->RegisterPropertyInteger('getDBD', 0);
			$this->RegisterPropertyBoolean('getDBDbool', false);
			$this->RegisterPropertyInteger('getDBT', 0);
			$this->RegisterPropertyBoolean('getDBTbool', false);
			$this->RegisterPropertyInteger('getDST', 0);
			$this->RegisterPropertyBoolean('getDSTbool', false);
			$this->RegisterPropertyInteger('getDCM', 0);
			$this->RegisterPropertyBoolean('getDCMbool', false);
			$this->RegisterPropertyInteger('getDOM', 0);
			$this->RegisterPropertyBoolean('getDOMbool', false);
			$this->RegisterPropertyInteger('getDPL', 0);
			$this->RegisterPropertyBoolean('getDPLbool', false);
			$this->RegisterPropertyInteger('getDTC', 0);
			$this->RegisterPropertyBoolean('getDTCbool', false);
			$this->RegisterPropertyInteger('getDRP', 0);
			$this->RegisterPropertyBoolean('getDRPbool', false);
			$this->RegisterPropertyInteger('getWFS', 0);
			$this->RegisterPropertyBoolean('getWFSbool', false);
			$this->RegisterPropertyInteger('getWFR', 0);
			$this->RegisterPropertyBoolean('getWFRbool', false);
			$this->RegisterPropertyInteger('getRTC', 0);
			$this->RegisterPropertyBoolean('getRTCbool', false);
			$this->RegisterPropertyInteger('getIDS', 0);
			$this->RegisterPropertyBoolean('getIDSbool', false);
			$this->RegisterPropertyInteger('getTMZ', 0);
			$this->RegisterPropertyBoolean('getTMZbool', false);

			$this->RegisterPropertyInteger('getLOCK', 0);
			$this->RegisterPropertyBoolean('getLOCKbool', false);
			$this->RegisterPropertyInteger('getPROFILESW', 0);
			$this->RegisterPropertyBoolean('getPROFILESWbool', false);

						
			$this->RegisterTimer('HGPB_UpdateData', 0, 'HGPB_UpdateData($_IPS[\'TARGET\']);');
			$this->RegisterPropertyInteger('UpdateDataInterval', 60);
		
			
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

			$this->SetTimerInterval('HGPB_UpdateData', $this->ReadPropertyInteger('UpdateDataInterval') * 1000);

			if ($this->ReadPropertyInteger('UpdateDataInterval') == 0){
				$this->SetStatus(104);
			} else {
				$this->SetStatus(102);
			}

			// create Profile
			if (!@IPS_VariableProfileExists("WaterManagement.Profile"))
			{
				IPS_CreateVariableProfile("WaterManagement.Profile", 1);
				IPS_SetVariableProfileDigits("WaterManagement.Profile", 1);
				IPS_SetVariableProfileAssociation("WaterManagement.Profile", 1, $this->Translate('present'), "", 0xFFFFFF);
				IPS_SetVariableProfileAssociation("WaterManagement.Profile", 2, $this->Translate('absent'), "", 0xFFFFFF);
				IPS_SetVariableProfileAssociation("WaterManagement.Profile", 3, $this->Translate('holiday'), "", 0xFFFFFF);
				IPS_SetVariableProfileAssociation("WaterManagement.Profile", 4, $this->Translate('increased consumption'), "", 0xFFFFFF);
				IPS_SetVariableProfileAssociation("WaterManagement.Profile", 5, $this->Translate('max consumption'), "", 0xFFFFFF);
				IPS_SetVariableProfileAssociation("WaterManagement.Profile", 6, $this->Translate('free'), "", 0xFFFFFF);
				IPS_SetVariableProfileAssociation("WaterManagement.Profile", 7, $this->Translate('free'), "", 0xFFFFFF);
				IPS_SetVariableProfileAssociation("WaterManagement.Profile", 8, $this->Translate('free'), "", 0xFFFFFF);
				IPS_SetVariableProfileValues("WaterManagement.Profile", 1, 8, 1);
			}
			if (!@IPS_VariableProfileExists("WaterManagement.Valve"))
			{
				IPS_CreateVariableProfile("WaterManagement.Valve", 1);
				IPS_SetVariableProfileDigits("WaterManagement.Valve", 1);
				IPS_SetVariableProfileAssociation("WaterManagement.Valve", 10, $this->Translate('close'), "", 0xFF0000);
				IPS_SetVariableProfileAssociation("WaterManagement.Valve", 20, $this->Translate('open'), "", 0x00FF00);
				IPS_SetVariableProfileValues("WaterManagement.Valve", 10, 20, 10);
			}
			if (!@IPS_VariableProfileExists("WaterManagement.Mbar"))
			{
				IPS_CreateVariableProfile("WaterManagement.Mbar", 1);
				IPS_SetVariableProfileText ("WaterManagement.Mbar", ""," mbar");
			}
			if (!@IPS_VariableProfileExists("WaterManagement.Liter"))
			{
				IPS_CreateVariableProfile("WaterManagement.Liter", 1);
				IPS_SetVariableProfileText ("WaterManagement.Liter", ""," L");
			}
			if (!@IPS_VariableProfileExists("WaterManagement.Mliter"))
			{
				IPS_CreateVariableProfile("WaterManagement.Mliter", 1);
				IPS_SetVariableProfileText ("WaterManagement.Mliter", ""," mL");
			}
			############################### 

			$this->MaintainVariable('getSRN', $this->Translate('Serial-no.'),1, "",0, $this->ReadPropertyBoolean('getSRNbool') == true);
			$this->MaintainVariable('getVER', $this->Translate('Firmware Version'),3, "",1, $this->ReadPropertyBoolean('getVERbool') == true);
			$this->MaintainVariable('getTYP', $this->Translate('Type'),1, "",2, $this->ReadPropertyBoolean('getTYPbool') == true);
			$this->MaintainVariable('getCNO', $this->Translate('Code-no.'),3, "",3, $this->ReadPropertyBoolean('getCNObool') == true);
			$this->MaintainVariable('getMAC', $this->Translate('MAC Address'),3, "",4, $this->ReadPropertyBoolean('getMACbool') == true);
			$this->MaintainVariable('getPRF', $this->Translate('active profile'),1, "WaterManagement.Profile",5, $this->ReadPropertyBoolean('getPRFbool') == true);
			$this->MaintainVariable('getPRN', $this->Translate('Standardprofil'),1, "",6, $this->ReadPropertyBoolean('getPRNbool') == true);
			$this->MaintainVariable('getPN1', $this->Translate('present'),3, "",7, $this->ReadPropertyBoolean('getPN1bool') == true);
			$this->MaintainVariable('getPV1', $this->Translate('max volume for leak, profile 1'),1, "",8, $this->ReadPropertyBoolean('getPV1bool') == true);
			$this->MaintainVariable('getPT1', $this->Translate('max minutes for leak, profile 1'),1, "",9, $this->ReadPropertyBoolean('getPT1bool') == true);
			$this->MaintainVariable('getPF1', $this->Translate('max flow l/h for leak, profile 1'),1, "",10, $this->ReadPropertyBoolean('getPF1bool') == true);
			$this->MaintainVariable('getPM1', $this->Translate('micro leak detection, profile 1'),1, "",11, $this->ReadPropertyBoolean('getPM1bool') == true);
			$this->MaintainVariable('getPR1', $this->Translate('getPR1'),1, "",12, $this->ReadPropertyBoolean('getPR1bool') == true);
			$this->MaintainVariable('getPB1', $this->Translate('getPB1'),1, "",13, $this->ReadPropertyBoolean('getPB1bool') == true);
			$this->MaintainVariable('getPN2', $this->Translate('absent'),3, "",14, $this->ReadPropertyBoolean('getPN2bool') == true);
			$this->MaintainVariable('getPV2', $this->Translate('max volume for leak, profile 2'),1, "",15, $this->ReadPropertyBoolean('getPV2bool') == true);
			$this->MaintainVariable('getPT2', $this->Translate('max minutes for leak, profile 2'),1, "",16, $this->ReadPropertyBoolean('getPT2bool') == true);
			$this->MaintainVariable('getPF2', $this->Translate('max flow l/h for leak, profile 2'),1, "",17, $this->ReadPropertyBoolean('getPF2bool') == true);
			$this->MaintainVariable('getPM2', $this->Translate('micro leak detection, profile 2'),1, "",18, $this->ReadPropertyBoolean('getPM2bool') == true);
			$this->MaintainVariable('getPR2', $this->Translate('getPR2'),1, "",19, $this->ReadPropertyBoolean('getPR2bool') == true);
			$this->MaintainVariable('getPB2', $this->Translate('getPB2'),1, "",20, $this->ReadPropertyBoolean('getPB2bool') == true);
			$this->MaintainVariable('getPN3', $this->Translate('holiday'),3, "",21, $this->ReadPropertyBoolean('getPN3bool') == true);
			$this->MaintainVariable('getPV3', $this->Translate('max volume for leak, profile 3'),1, "",22, $this->ReadPropertyBoolean('getPV3bool') == true);
			$this->MaintainVariable('getPT3', $this->Translate('max minutes for leak, profile 3'),1, "",23, $this->ReadPropertyBoolean('getPT3bool') == true);
			$this->MaintainVariable('getPF3', $this->Translate('max flow l/h for leak, profile 3'),1, "",24, $this->ReadPropertyBoolean('getPF3bool') == true);
			$this->MaintainVariable('getPM3', $this->Translate('micro leak detection, profile 3'),1, "",25, $this->ReadPropertyBoolean('getPM3bool') == true);
			$this->MaintainVariable('getPR3', $this->Translate('getPR3'),1, "",26, $this->ReadPropertyBoolean('getPR3bool') == true);
			$this->MaintainVariable('getPB3', $this->Translate('getPB3'),1, "",27, $this->ReadPropertyBoolean('getPB3bool') == true);
			$this->MaintainVariable('getPN4', $this->Translate('increased consumption'),3, "",28, $this->ReadPropertyBoolean('getPN4bool') == true);
			$this->MaintainVariable('getPV4', $this->Translate('max volume for leak, profile 4'),1, "",29, $this->ReadPropertyBoolean('getPV4bool') == true);
			$this->MaintainVariable('getPT4', $this->Translate('max minutes for leak, profile 4'),1, "",30, $this->ReadPropertyBoolean('getPT4bool') == true);
			$this->MaintainVariable('getPF4', $this->Translate('max flow l/h for leak, profile 4'),1, "",31, $this->ReadPropertyBoolean('getPF4bool') == true);
			$this->MaintainVariable('getPM4', $this->Translate('micro leak detection, profile 4'),1, "",32, $this->ReadPropertyBoolean('getPM4bool') == true);
			$this->MaintainVariable('getPR4', $this->Translate('getPR4'),1, "",33, $this->ReadPropertyBoolean('getPR4bool') == true);
			$this->MaintainVariable('getPB4', $this->Translate('getPB4'),1, "",34, $this->ReadPropertyBoolean('getPB4bool') == true);
			$this->MaintainVariable('getPN5', $this->Translate('max consumption'),3, "",35, $this->ReadPropertyBoolean('getPN5bool') == true);
			$this->MaintainVariable('getPV5', $this->Translate('max volume for leak, profile 5'),1, "",36, $this->ReadPropertyBoolean('getPV5bool') == true);
			$this->MaintainVariable('getPT5', $this->Translate('max minutes for leak, profile 5'),1, "",37, $this->ReadPropertyBoolean('getPT5bool') == true);
			$this->MaintainVariable('getPF5', $this->Translate('max flow l/h for leak, profile 5'),1, "",38, $this->ReadPropertyBoolean('getPF5bool') == true);
			$this->MaintainVariable('getPM5', $this->Translate('micro leak detection, profile 5'),1, "",39, $this->ReadPropertyBoolean('getPM5bool') == true);
			$this->MaintainVariable('getPR5', $this->Translate('getPR5'),1, "",40, $this->ReadPropertyBoolean('getPR5bool') == true);
			$this->MaintainVariable('getPB5', $this->Translate('getPB5'),1, "",41, $this->ReadPropertyBoolean('getPB5bool') == true);
			$this->MaintainVariable('getPN6', $this->Translate('free profile 6'),3, "",42, $this->ReadPropertyBoolean('getPN6bool') == true);
			$this->MaintainVariable('getPV6', $this->Translate('max volume for leak, profile 6'),1, "",43, $this->ReadPropertyBoolean('getPV6bool') == true);
			$this->MaintainVariable('getPT6', $this->Translate('max minutes for leak, profile 6'),1, "",44, $this->ReadPropertyBoolean('getPT6bool') == true);
			$this->MaintainVariable('getPF6', $this->Translate('max flow l/h for leak, profile 6'),1, "",45, $this->ReadPropertyBoolean('getPF6bool') == true);
			$this->MaintainVariable('getPM6', $this->Translate('micro leak detection, profile 6'),1, "",46, $this->ReadPropertyBoolean('getPM6bool') == true);
			$this->MaintainVariable('getPR6', $this->Translate('getPR6'),1, "",47, $this->ReadPropertyBoolean('getPR6bool') == true);
			$this->MaintainVariable('getPB6', $this->Translate('getPB6'),1, "",48, $this->ReadPropertyBoolean('getPB6bool') == true);
			$this->MaintainVariable('getPN7', $this->Translate('free profile 7'),3, "",49, $this->ReadPropertyBoolean('getPN7bool') == true);
			$this->MaintainVariable('getPV7', $this->Translate('max volume for leak, profile 7'),1, "",50, $this->ReadPropertyBoolean('getPV7bool') == true);
			$this->MaintainVariable('getPT7', $this->Translate('max minutes for leak, profile 7'),1, "",51, $this->ReadPropertyBoolean('getPT7bool') == true);
			$this->MaintainVariable('getPF7', $this->Translate('max flow l/h for leak, profile 7'),1, "",52, $this->ReadPropertyBoolean('getPF7bool') == true);
			$this->MaintainVariable('getPM7', $this->Translate('micro leak detection, profile 7'),1, "",53, $this->ReadPropertyBoolean('getPM7bool') == true);
			$this->MaintainVariable('getPR7', $this->Translate('getPR7'),1, "",54, $this->ReadPropertyBoolean('getPR7bool') == true);
			$this->MaintainVariable('getPB7', $this->Translate('getPB7'),1, "",55, $this->ReadPropertyBoolean('getPB7bool') == true);
			$this->MaintainVariable('getPN8', $this->Translate('free profile 8'),3, "",56, $this->ReadPropertyBoolean('getPN8bool') == true);
			$this->MaintainVariable('getPV8', $this->Translate('max volume for leak, profile 8'),1, "",57, $this->ReadPropertyBoolean('getPV8bool') == true);
			$this->MaintainVariable('getPT8', $this->Translate('max minutes for leak, profile 8'),1, "",58, $this->ReadPropertyBoolean('getPT8bool') == true);
			$this->MaintainVariable('getPF8', $this->Translate('max flow l/h for leak, profile 8'),1, "",59, $this->ReadPropertyBoolean('getPF8bool') == true);
			$this->MaintainVariable('getPM8', $this->Translate('micro leak detection, profile 8'),1, "",60, $this->ReadPropertyBoolean('getPM8bool') == true);
			$this->MaintainVariable('getPR8', $this->Translate('getPR8'),1, "",61, $this->ReadPropertyBoolean('getPR8bool') == true);
			$this->MaintainVariable('getPB8', $this->Translate('getPB8'),1, "",62, $this->ReadPropertyBoolean('getPB8bool') == true);
			$this->MaintainVariable('getTMP', $this->Translate('getTMP'),1, "",63, $this->ReadPropertyBoolean('getTMPbool') == true);
			$this->MaintainVariable('getVLV', $this->Translate('Valvestate'),1, "WaterManagement.Valve",64, $this->ReadPropertyBoolean('getVLVbool') == true);
			$this->MaintainVariable('getCEL', $this->Translate('getCEL'),1, "",65, $this->ReadPropertyBoolean('getCELbool') == true);
			$this->MaintainVariable('getBAR', $this->Translate('water pressure'),1, "WaterManagement.Mbar",66, $this->ReadPropertyBoolean('getBARbool') == true);
			$this->MaintainVariable('getNPS', $this->Translate('getNPS'),1, "",67, $this->ReadPropertyBoolean('getNPSbool') == true);
			$this->MaintainVariable('getALA', $this->Translate('current alarm'),3, "",68, $this->ReadPropertyBoolean('getALAbool') == true);
			$this->MaintainVariable('getALM', $this->Translate('getALM'),3, "",69, $this->ReadPropertyBoolean('getALMbool') == true);
			$this->MaintainVariable('getDMA', $this->Translate('getDMA'),1, "",70, $this->ReadPropertyBoolean('getDMAbool') == true);
			$this->MaintainVariable('getAVO', $this->Translate('getAVO'),1, "WaterManagement.Mliter",71, $this->ReadPropertyBoolean('getAVObool') == true);
			$this->MaintainVariable('getVOL', $this->Translate('total volume in liters'),1, "WaterManagement.Liter",72, $this->ReadPropertyBoolean('getVOLbool') == true);
			$this->MaintainVariable('get71', $this->Translate('get71'),1, "",73, $this->ReadPropertyBoolean('get71bool') == true);
			$this->MaintainVariable('getBAT', $this->Translate('battery voltage'),2, "~Volt",74, $this->ReadPropertyBoolean('getBATbool') == true);
			$this->MaintainVariable('getNET', $this->Translate('water temperature'),2, "~Temperature",75, $this->ReadPropertyBoolean('getNETbool') == true);
			$this->MaintainVariable('getBUZ', $this->Translate('getBUZ'),1, "",76, $this->ReadPropertyBoolean('getBUZbool') == true);
			$this->MaintainVariable('getDBD', $this->Translate('getDBD'),1, "",77, $this->ReadPropertyBoolean('getDBDbool') == true);
			$this->MaintainVariable('getDBT', $this->Translate('getDBT'),1, "",78, $this->ReadPropertyBoolean('getDBTbool') == true);
			$this->MaintainVariable('getDST', $this->Translate('getDST'),1, "",79, $this->ReadPropertyBoolean('getDSTbool') == true);
			$this->MaintainVariable('getDCM', $this->Translate('getDCM'),1, "",80, $this->ReadPropertyBoolean('getDCMbool') == true);
			$this->MaintainVariable('getDOM', $this->Translate('getDOM'),1, "",81, $this->ReadPropertyBoolean('getDOMbool') == true);
			$this->MaintainVariable('getDPL', $this->Translate('getDPL'),1, "",82, $this->ReadPropertyBoolean('getDPLbool') == true);
			$this->MaintainVariable('getDTC', $this->Translate('getDTC'),1, "",83, $this->ReadPropertyBoolean('getDTCbool') == true);
			$this->MaintainVariable('getDRP', $this->Translate('getDRP'),1, "",84, $this->ReadPropertyBoolean('getDRPbool') == true);
			$this->MaintainVariable('getWFS', $this->Translate('getWFS'),1, "",85, $this->ReadPropertyBoolean('getWFSbool') == true);
			$this->MaintainVariable('getWFR', $this->Translate('WiFi RSSI'),1, "",86, $this->ReadPropertyBoolean('getWFRbool') == true);
			$this->MaintainVariable('getRTC', $this->Translate('last update'),1, "~UnixTimestamp",87, $this->ReadPropertyBoolean('getRTCbool') == true);
			$this->MaintainVariable('getIDS', $this->Translate('getIDS'),1, "",88, $this->ReadPropertyBoolean('getIDSbool') == true);
			$this->MaintainVariable('getTMZ', $this->Translate('getTMZ'),1, "",89, $this->ReadPropertyBoolean('getTMZbool') == true);
			
			$this->MaintainVariable('getLOCK', $this->Translate('lock or unlock valve'),1, "WaterManagement.Valve",90, $this->ReadPropertyBoolean('getLOCKbool') == true);
			$this->MaintainVariable('getPROFILESW', $this->Translate('switch active profile'),1, "WaterManagement.Profile",91, $this->ReadPropertyBoolean('getPROFILESWbool') == true);

			######################## 
			// check if user deactivate Waterprofile and switching profile and delete IPS Profile
			if  ( ((!$this->ReadPropertyBoolean('getPRFbool')) AND ((!$this->ReadPropertyBoolean('getPROFILESWbool')) AND (@IPS_VariableProfileExists("WaterManagement.Profile")) )))
			{
				IPS_DeleteVariableProfile("WaterManagement.Profile");
			}

			if  ( ((!$this->ReadPropertyBoolean('getVLVbool')) AND ((!$this->ReadPropertyBoolean('getLOCKbool')) AND (@IPS_VariableProfileExists("WaterManagement.Valve")) )))
			{
				IPS_DeleteVariableProfile("WaterManagement.Valve");
			}

			if  ( ((!$this->ReadPropertyBoolean('getAVObool')) AND (@IPS_VariableProfileExists("WaterManagement.Mliter")) ))
			{
				IPS_DeleteVariableProfile("WaterManagement.Mliter");
			}
			
			if  ( ((!$this->ReadPropertyBoolean('getBARbool')) AND (@IPS_VariableProfileExists("WaterManagement.Mbar")) ))
			{
				IPS_DeleteVariableProfile("WaterManagement.Mbar");
			}
			
			if  ( ((!$this->ReadPropertyBoolean('getVOLbool')) AND (@IPS_VariableProfileExists("WaterManagement.Liter")) ))
			{
				IPS_DeleteVariableProfile("WaterManagement.Liter");
			}

			if  ($this->ReadPropertyBoolean('getLOCKbool') )
			{
				$this->EnableAction('getLOCK');
			}
			if  ($this->ReadPropertyBoolean('getPROFILESWbool') )
			{
				$this->EnableAction('getPROFILESW');
			}
			########################

			// create  URI for actions and reading values
			if ($this->ReadPropertyString('Modell') == "hansgrohe")
			{
				$this->WriteAttributeString('URI', "Pontos-Base");
			}

			if ($this->ReadPropertyString('Modell') == "syrtech")
			{
				$this->WriteAttributeString('URI', "safe-tec");
			}
			####
			if ($this->ReadAttributeBoolean('FirstRunDone') )
			{
				$this->UpdateData();
			}

		}

		public function GetConfigurationForm()
		{
			$jsonForm = json_decode(file_get_contents(__DIR__ . "/form.json"), true);
			
			if ($this->Getstatus() == 104 ){
				$jsonForm["elements"][4]["visible"] = true;
			}

			if (!$this->ReadAttributeBoolean('FirstRunDone') )
			{
				$jsonForm["elements"][5]["visible"] = false;
				$jsonForm["elements"][6]["visible"] = false;
			}
			
			if ($this->ReadAttributeBoolean('FirstRunDone') )
			{
				$jsonForm["elements"][5]["visible"] = true;
				$jsonForm["elements"][6]["visible"] = true;
				$jsonForm["actions"][0]["visible"] = false;
				$jsonForm["actions"][1]["visible"] = false;
			}
			if (!$this->ReadAttributeBoolean('AdminMode') )
			{
				if (!$this->ReadAttributeBoolean('FirstRunDone') ){
					$jsonForm["actions"][3]["visible"] = false;
					$jsonForm["actions"][4]["visible"] = false;
	
				}
				else{
					$jsonForm["actions"][3]["visible"] = true;
					$jsonForm["actions"][4]["visible"] = true;
				}

			}
			if ($this->ReadAttributeBoolean('AdminMode') )
			{
				$jsonForm["actions"][3]["visible"] = false;
				$jsonForm["actions"][4]["visible"] = false;
				$jsonForm["actions"][6]["visible"] = true;

				$jsonForm["elements"][5]["items"][2]["visible"] = true;
				$jsonForm["elements"][5]["items"][4]["visible"] = true;
				$jsonForm["elements"][5]["items"][5]["visible"] = true;
				$jsonForm["elements"][5]["items"][6]["visible"] = true;
				$jsonForm["elements"][5]["items"][7]["visible"] = true;
				
				$jsonForm["elements"][6]["items"][78]["visible"] = true;
				$jsonForm["elements"][6]["items"][80]["visible"] = true;

				$jsonForm["elements"][6]["items"][83]["visible"] = true;
				$jsonForm["elements"][6]["items"][85]["visible"] = true;
				$jsonForm["elements"][6]["items"][86]["visible"] = true;
				$jsonForm["elements"][6]["items"][87]["visible"] = true;
				$jsonForm["elements"][6]["items"][88]["visible"] = true;
				$jsonForm["elements"][6]["items"][89]["visible"] = true;
				$jsonForm["elements"][6]["items"][90]["visible"] = true;
				$jsonForm["elements"][6]["items"][91]["visible"] = true;

			}
			
			return json_encode($jsonForm);
		}

		public function UpdateData()
		{
			$Data = $this->GetAllData();

			// check if User want to create Variable and if match with received Data, then set the value.

			foreach ($Data as $key =>$value) 
			{
				if (@$this->GetIDForIdent(''.$key.'')) 
				{

					// some received data are not alphanumeric, we change this and remove all non numeric fields
					switch ($key) {
						case 'getVOL':
						case 'getAVO': 
						case 'getBAR':
								$value=preg_replace("/[^0-9]+/", "", $value);
							break;
					}

					switch ($key) {
						case 'getNPS':
						case 'getALM':
						case 'getVOL':
						case 'get71':
						case 'getNET':
						case 'getDBD':
						case 'getDBT':
						case 'getDST':
						case 'getDCM':
						case 'getDOM':
						case 'getDPL':
						case 'getDTC':
							if ($value == "ERROR: ADM"){
								exit;
							}
							break;
					}
						setValue($this->GetIDForIdent(''.$key.''), $value);
				}
			}		
		}	

		public function GetAllData()
		{
			$adminmodeenable	= $this->ReadAttributeBoolean('AdminMode');
			$ipaddress	 		= $this->ReadPropertyString('IPAddress');
			$modell				= $this->ReadAttributeString('URI');
			$uri       			= 'http://'.$ipaddress.':5333/'.$modell.'/get/all';

			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $uri);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
			$response = curl_exec($ch);
			$curl_error = curl_error($ch);
			curl_close($ch);
			if (empty($response) || $response === false || !empty($curl_error)) {
				$this->SendDebug(__FUNCTION__, 'no response from device' . $curl_error, 0);
				return false;
			}
			$responseData = json_decode($response, TRUE);
	  	  
			return $responseData;	
		}

		// check if admin mode on the device is enable, if not, give user the option to change this
		public function CheckAdminMode()
		{
			$AdminModeStatus = $this->GetAllData();
			//$AdminModeStatus = array('getNPS' => "ERROR: ADM");
			if ( $AdminModeStatus['getNPS'] == "ERROR: ADM")
				{
					$this->WriteAttributeBoolean('AdminMode', false);
				}
			else 
				{
					$this->WriteAttributeBoolean('AdminMode', true);
				}
		}
		
		public function WriteSetting(string $setting, int $value)
		{
			$ipaddress	 		= $this->ReadPropertyString('IPAddress');
			$modell				= $this->ReadAttributeString('URI');
			$uri       			= 'http://'.$ipaddress.':5333/'.$modell;

			switch($setting)
			{
				case 'profile':
						$uri = $uri."/set/prf/".$value;
						Sys_getURLContent($uri);
				break;
				case 'lock':
						$uri = $uri."/set/ab/".$value;
						Sys_getURLContent($uri);
				break;
				case 'EnableAdminMode':
						$uri = $uri."/set/ADM/(2)f";
						Sys_getURLContent($uri);
						$this->CheckAdminMode();
				break;
				case 'ClearAlarm':
					$uri = $uri."/set/clr/ala";
					Sys_getURLContent($uri);
				break;
			
			}
		}

		public function RequestAction($Ident, $Value)
		{
			switch ($Ident) {
				case 'getPROFILESW':
					$this->SetValue("getPROFILESW", $Value);
					$this->WriteSetting("profile", $Value);
				break;
				case 'getLOCK':
					$this->SetValue("getLOCK", $Value);
					if ($Value == 10){$Value = 2;} // set/ab/2 close valve
					if ($Value == 20){$Value = 1;} // set/ab/1 open valve
					$this->WriteSetting("lock", $Value);
				break;
			}
		}


		public function FirstRun()
		{	
			$this->UpdateFormField("FirstRunProgress", "visible", true);
			$this->CheckAdminMode();
			$this->WriteAttributeBoolean('FirstRunDone', true);
			$this->UpdateFormField("FirstRunProgress", "visible", false);

			$this->ReloadForm();
		}

		// for debugging only. help to reset FirstRun Variable
		public function FirstRunReset()
		{
			$this->WriteAttributeBoolean('FirstRunDone', false);
			$this->WriteAttributeBoolean('AdminMode', false);

		}

}