// Необходимо создать массив в самом верху php-файла, в котором будет описываться опыт работы (правая верхняя часть сайта). 
// Необходимо вставить из массива данные на странице, а именно, название работ, дату и описание для каждой работы.

<?php
    $job = [
        'job_name' => ['Мангазея', 'Парус', 'Росреестр'],
        'job_data' => ['2020-2023', '2007-2012', '1990-2007'],
        'job_desc' => ['Интересная работа', 'Разная работа', 'Креативная работа']
    ]
?>

<div class="w3-container w3-card w3-white w3-margin-bottom">
    <h2 class="w3-text-grey w3-padding-16"><i
        class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Опыт работы</h2>
    <div class="w3-container">
        <h5 class="w3-opacity"><b>
            <?php echo $job['job_name'][0]; ?>
        </b></h5>
        <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>
        <?php echo $job['job_data'][0]; ?>
        </h6>
        <p>
            <?php echo $job['job_desc'][0]; ?>
        </p>
        <hr>
    </div>
    <div class="w3-container">
        <h5 class="w3-opacity"><b>
            <?php echo $job['job_name'][1]; ?>
        </b></h5>
        <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>
            <?php echo $job['job_data'][1]; ?>
        </h6>
        <p>
            <?php echo $job['job_desc'][1]; ?>
        </p>
        <hr>
    </div>
    <div class="w3-container">
        <h5 class="w3-opacity"><b>
            <?php echo $job['job_name'][2]; ?>
        </b></h5>
        <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>
            <?php echo $job['job_data'][2]; ?>
        </h6>
        <p>
            <?php echo $job['job_desc'][2]; ?>
        </p><br>
    </div>
</div>