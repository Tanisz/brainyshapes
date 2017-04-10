<section id="one" class="wrapper style1">
    <div class="container 75%">
        <div class="row 200%">
            <div class="6u 12u$(medium)">
                <header class="major">
                    <h2>Eredmények</h2>
                    <p>Tekintsd meg feltöltött eredményeid és hasonlítsd össze mások eredményeivel!</p>
                    <br>
                    <p>Legyél Te a legjobb!</p>
                </header>
            </div>
            <div class="6u$ 12u$(medium)">
                <p>A fetöltött eredményed több szempontból is rangsorolva van.</p>
                <p>A különböző fülek mutatják, hogy melyik szempontról van szó és azon belül Te miként szerepeltél. </p>
            </div>
        </div>
    </div>
</section>


<section>
    <h3>Eredmények</h3>
    <?php
    $this->widget('zii.widgets.grid.CGridView', array(
        'dataProvider' => $dataProvider,
        'cssFile' => Yii::app()->request->baseUrl . '/css/table.css',
        'summaryText' => '',
        'columns' => array
            (
            array(
                  'header'=>'Helyezés',
                  'value'=>'++$row',
                  'htmlOptions' => array('style' => 'width: 30px;'),
            ),
            /*array(
                'name' => 'Azonosító',
                'value' => '$data->eredmenyek_id',
                'htmlOptions' => array('style' => 'width: 50px;'),
            ),*/
            array(
                'name' => 'Játékos',
                'value' => '$data->users->username',
                'htmlOptions' => array('style' => 'width: 300px;'),
            ),
            array(
                'name' => 'Pontszám',
                'value' => '$data->pontszam',
                'htmlOptions' => array('style' => 'width: 50px;'),
            ),
        ),
    ));
    ?>

</section>


