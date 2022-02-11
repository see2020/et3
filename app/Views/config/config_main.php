<nav  style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="<?php echo base_url();?>/">Главная</a></li>
		<li class="breadcrumb-item"><a href="<?php echo base_url();?>/config">Настройки</a></li>
		<li class="breadcrumb-item active" aria-current="page">Основные настройки</li>
	</ol>
</nav>

<div class="container-lg px-4 py-5" id="icon-grid">
    <h2 class="pb-2 border-bottom"><?php echo $mainconfig['description'] ;?></h2>

    <form>

        <div class="accordion" id="accordionPanelsStayOpenExample">
	<?php

	foreach($mainconfig as $keyGroup => $valGroup){ // раздел
		if($keyGroup != 'description') {
			echo '
            <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-heading' . $keyGroup . '">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse' . $keyGroup . '" aria-expanded="false" aria-controls="panelsStayOpen-collapse' . $keyGroup . '">
						' . ($valGroup['description']??$keyGroup) . '
                    </button>
                </h2>
                <div id="panelsStayOpen-collapse' . $keyGroup . '" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading' . $keyGroup . '">
                    <div class="accordion-body">
            ';
			foreach ($valGroup as $keySetting => $valSetting){ // настройка
				if($keySetting != 'description'){
					echo '
						<div class="mb-3">
							<label for="' . $keySetting . '" class="form-label">' . $valSetting['description'] . '</label>
					';
                    switch ($valSetting['type']){
                        case 'select':
                            echo '
                            <select class="form-select" aria-label="Default select example"
                            aria-describedby="' . $keySetting . 'Help"
                                name="' . $keySetting . '"
                                id="' . $keySetting . '"
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
								  id="flexCheckDisabled" 
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
                                    name="' . $keySetting . '"
                                    id="' . $keySetting . '"
                                    aria-describedby="' . $keySetting . 'Help"
                                    value="' . $valSetting['value'] . '"
                                    ' . ( (!empty($valSetting['editable'])) ? '' : 'disabled' ) . '
                                >
                            ';
                            break;
                    }

                    if(!empty($valSetting['help'])){
                    	echo '<div id="' . $keySetting . 'Help" class="form-text">' . $valSetting['help'] . '</div>';
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

	</form>

</div>