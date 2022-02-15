<nav  style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="<?php echo base_url();?>/">Главная</a></li>
		<li class="breadcrumb-item"><a href="<?php echo base_url();?>/config">Настройки</a></li>
		<li class="breadcrumb-item active" aria-current="page">Основные настройки</li>
	</ol>
</nav>

<div class="container-lg px-4 py-5" id="icon-grid">
    <h2 class="pb-2 border-bottom"><?php echo $mainconfig['description'] ;?></h2>

    <form action="<?php echo base_url();?>/config/save">

        <div class="accordion" id="accordionPanelsStayOpenExample">
	<?php

	foreach($mainconfig as $keyGroup => $valGroup){ // раздел
		if($keyGroup != 'description') {
			$Group = 'MainConfig' . $keyGroup;
			echo '
            <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-heading' . $Group . '">
                    <button 
                    	class="accordion-button collapsed" 
                    	type="button" 
                    	data-bs-toggle="collapse" 
                    	data-bs-target="#panelsStayOpen-collapse' . $Group . '" 
                    	aria-expanded="false" 
                    	aria-controls="panelsStayOpen-collapse' . $Group . '">
						' . ($valGroup['description']??$Group) . '
                    </button>
                </h2>
                <div 
                	id="panelsStayOpen-collapse' . $Group . '" 
                	class="accordion-collapse collapse" 
                	aria-labelledby="panelsStayOpen-heading' . $Group . '">
                    <div class="accordion-body">
            ';
			foreach ($valGroup as $keySetting => $valSetting){ // настройка
				if($keySetting != 'description'){
					$Setting = $Group . $keySetting;
					echo '
						<div class="mb-3">
							<label for="' . $Setting . '" class="form-label">
							' . $valSetting['description'] . ' 
							 (' . $Setting . ')
							
							</label>
					';
                    switch ($valSetting['type']){
                        case 'select':
                            echo '
                            <select class="form-select" aria-label="Default select example"
                            aria-describedby="' . $Setting . 'Help"
                                name="' . $Setting . '"
                                id="' . $Setting . '"
                                ' . ( (!empty($valSetting['editable'])) ? '' : 'disabled' ) . '
                            >
                            ';

							foreach ($valSetting['data'] as $dKey => $dVal) {
								echo '<option ' . (($dKey == $valSetting['value'])?'selected':'') . '  value="'. $dKey . '">'. $dVal . '</option>';
							}

                            echo '
                            </select>
                            ';
                            break;

						case 'checkbox':
//<div class="form-check">
//<input class="form-check-input" type="checkbox" value="" id="flexCheckDisabled" disabled>
//<label class="form-check-label" for="flexCheckDisabled">
//Disabled checkbox
//</label>
//</div>
							echo '
								
								  <input class="form-check-input" type="checkbox" 
								  value="1" 
									name="' . $Setting . '"
									id="' . $Setting . '"
								  ' . ( (!empty($valSetting['value'])) ? 'checked' : '' ) . '
								  ' . ( (!empty($valSetting['editable'])) ? '' : 'disabled' ) . '
								  >
	
							';
							break;

                        default:
                            echo '
                                <input
                                    type="' . $valSetting['type'] . '"
                                    class="form-control"
                                    name="' . $Setting . '"
                                    id="' . $Setting . '"
                                    aria-describedby="' . $Setting . 'Help"
                                    value="' . $valSetting['value'] . '"
                                    ' . ( (!empty($valSetting['editable'])) ? '' : 'disabled' ) . '
                                >
                            ';
                            break;
                    }

                    if(!empty($valSetting['help'])){
                    	echo '<div id="' . $Setting . 'Help" class="form-text">' . $valSetting['help'] . '</div>';
					}

                    echo '</div>';

				}


			}

			echo '
                    </div>
                </div>
            </div>
			';
		}
	}

	?>
        </div>

		<button type="submit" class="btn btn-primary" style="margin-top: 15px;">Сохранить</button>
	</form>

</div>