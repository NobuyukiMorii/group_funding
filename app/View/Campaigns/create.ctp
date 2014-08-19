<meta charset="UTF-8">
<?php echo $this->Html->script('create') ;?>
<div data-role="page" data-theme="a">

	<!-- コンテンツの読み込み -->
  	<div role="main" class="ui-content">
        <form action="<?php echo $this->Html->url('create_confirm');?>" method="post" enctype='multipart/form-data' data-ajax="false" id="form" class="create_form_mobile" data-ajax="false">

            <!-- お金の集め方 -->
            <fieldset data-role="controlgroup" data-type="horizontal" data-role="fieldcontain">
                <legend>投資スタイル</legend>
                    <label for="radio-choice-1">任意</label>
                    <input type="radio" name="data[Campaign][style]" value="optional" id="radio-choice-1" onclick="entryChange();"checked="checked"/>
                    <label for="radio-choice-2">均一</label>
                    <input type="radio" name="data[Campaign][style]" value="uniform" id="radio-choice-2" onclick="entryChange();"/>
            </fieldset>

            <!-- お金を集める目的 -->
            <legend>プロジェクト名</legend>
            <input type="text" name="data[Campaign][name]" value=""  data-mini=“true”/>
            <!-- 期限 -->
            <legend>期限</legend>
            <!-- 初期値はn日後ぼ日付 -->
            <input type="date" name="data[Campaign][time_limit]" data-mini=“true” value="<?php echo $this->Common->day(7);?>" />
            <!-- 詳細 -->
            <legend>説明</legend>
            <textarea name="data[Campaign][description]" value="" data-mini=“true”></textarea>
            <!-- 画像 -->
            <legend>写真</legend>
            <input type="file" name="data[Campaign][file]" value="" data-mini=“true”/>
    
            <!-- １人あたりの最低額 -->
            <div id="firstBox"><legend>最小支払額</legend></div>
            <!-- １人あたりの金額 -->
            <div id="secondBox"><legend>支払額</legend></div>

            <input type="text" name="data[Campaign][payment]" value=""  data-mini=“true”/>
            <!-- 必要最小金額 -->
            <legend>目標金額（最小）</legend>
            <input type="text" name="data[Campaign][small_sum]" value=""  data-mini=“true”/>
            <!-- 理想学 -->
            <legend>目標金額（最大）</legend>
            <input type="text" name="data[Campaign][capital_sum]" value=""  data-mini=“true”/>
        
        <button type="submit" id="fun_button"/>Fun!</button>

        </form>

  	</div>
</div>