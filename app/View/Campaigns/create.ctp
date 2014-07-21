<div class="container">
    <div class="row">
        <div class="col-lg-12 col-lg-offset-0 col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0">

            <?php echo $this->Form->create
                  (
                  'Campaign',
                  array(
                        'type' => 'post', 
                        'action'=>'project', 
                        'enctype' => 'multipart/form-data',
                        'role' => 'form',
                        'class' => 'form-horizontal text-left'
                        )
                  );
            ?>

            <div class ="well">

                  <div class="form-group">
                        <label for="CampaignName" class="col-sm-2 control-label">プロジェクト名</label>
                        <div class="col-sm-5">
                              <?php echo $this->Form->input
                                    (
                                    'Campaign.name', 
                                    array('class' => 'form-control',
                                          'required' => false,
                                          'label' => false , 
                                          'div' => false,
                                          'placeholder' => "沖縄旅行をプレゼント",
                                          'id' => "CampaignName"
                                          )
                                    );
                              ?>
                        </div>
                  </div>

                  <div class="form-group">
                        <label for="CampaignAmount" class="col-sm-2 control-label">目標金額（円）</label>
                        <div class="col-sm-5">
                              <?php echo $this->Form->input
                                    (
                                    'Campaign.amount', 
                                    array('class' => 'form-control',
                                          'required' => false,
                                          'label' => false , 
                                          'div' => false,
                                          'placeholder' => "500",
                                          'id' => "CampaignAmount"
                                          )
                                    );
                              ?>
                        </div>
                  </div>

                  <div class="form-group">
                        <label for="CampaignStart" class="col-sm-2 control-label">開始時期</label>
                        <div class="col-sm-5">
                              <?php echo $this->Form->input
                                    (
                                    'Campaign.start', 
                                    array('class' => 'form-control',
                                          'required' => false,
                                          'label' => false , 
                                          'div' => false,
                                          'placeholder' => "2014年7月20日",
                                          'id' => "CampaignStart"
                                          )
                                    );
                              ?>
                        </div>
                  </div>

                  <div class="form-group">
                        <label for="CampaignEnd" class="col-sm-2 control-label">終了時期</label>
                        <div class="col-sm-5">
                              <?php echo $this->Form->input
                                    (
                                    'Campaign.end', 
                                    array('class' => 'form-control',
                                          'required' => false,
                                          'label' => false , 
                                          'div' => false,
                                          'placeholder' => "2014年8月20日",
                                          'id' => "CampaignEnd"
                                          )
                                    );
                              ?>
                        </div>
                  </div>

                  <div class="form-group">
                        <label for="CampaignDescription" class="col-sm-2 control-label">プロジェクト詳細</label>
                        <div class="col-sm-5">
                              <?php echo $this->Form->input
                                    (
                                    'Campaign.description', 
                                    array('class' => 'form-control',
                                          'required' => false,
                                          'label' => false , 
                                          'div' => false,
                                          'placeholder' => "田中さんの誕生日のお祝いのお金をカンパしよう！",
                                          'id' => "CampaignDescription",
                                          'rows' => 5
                                          )
                                    );
                              ?>
                        </div>
                  </div>

<!-- 画像の処理は後まわし -->
<!--                   <div class="form-group">
                        <label for="CampaignImage" class="col-sm-2 control-label">画像</label>
                        <div class="col-sm-10">

                              <?php echo $this->Form->input
                                    (
                                    'Campaign.image',
                                    array(
                                          'type' => 'file',
                                          'required' => false,
                                          'label' => false , 
                                          'id' => "CampaignImage"
                                          )
                                    ); 
                              ?>
                       
                        </div>
                  </div> -->

                  <div class="form-group">
                              <?php echo $this->Form->submit('プロジェクトを登録する', array('class' => 'btn btn-lg btn-default btn-block'));?>
                              <?php echo $this->Form->end(); ?>
                  </div>

            </div>
                   <!-- content -->
             </div><!-- /wellデートの希望 -->







        </div>
</div>