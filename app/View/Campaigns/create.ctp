<?php echo $this->Html->script('create');?>

<div data-role="page" data-theme="a">

	<!-- コンテンツの読み込み -->
  	<div role="main" class="ui-content">
 
        <form action="<?php echo $this->Html->url('',true);?>" method="post" enctype='multipart/form-data' data-ajax="false" id="form" class="create_form_mobile">

            <!-- お金の集め方 -->
            <fieldset data-role="controlgroup" data-type="horizontal" data-role="fieldcontain">
                <legend>投資スタイル</legend>
                    <label for="radio-choice-1">任意</label>
                    <input type="radio" name="style" value="0" id="radio-choice-1" onclick="entryChange();"checked="checked"/>
                    <label for="radio-choice-2">均一</label>
                    <input type="radio" name="style" value="1" id="radio-choice-2" onclick="entryChange();"/>
            </fieldset>

            <!-- お金を集める目的 -->
            <legend>プロジェクト名</legend>
            <input type="text" name="title" value="" data-mini=“true”/>
            <!-- 期限 -->
            <legend>期限</legend>
            <input type="date" name="name" value="" data-mini=“true”/>
            <!-- 詳細 -->
            <legend>説明</legend>
            <textarea name="description" value="" data-mini=“true”></textarea>
            <!-- 画像 -->
            <legend>写真</legend>
            <input type="file" name="image" value="" data-mini=“true”/>

            <!-- 表示非表示切り替え -->
            <div id="firstBox">
                <!-- １人あたりの最低額 -->
                <legend>最小支払額</legend>
                <input type="text" name="each_person_pays" value=""  data-mini=“true”/>
                <!-- 必要最小金額 -->
                <legend>目標金額（最小）</legend>
                <input type="text" name="mini_collect_amount" value=""  data-mini=“true”/>
                <!-- 理想学 -->
                <legend>目標金額（最大）</legend>
                <input type="text" name="max_collect_amount" value=""  data-mini=“true”/>

            </div>

            <div id="secondBox">
                <!-- 一人当たりの金額 -->
                <legend>支払額</legend>
                <input type="text" name="each_person_pays" value="" data-mini=“true”/>
                <!-- 必要最小金額 -->
                <legend>目標金額（最小）</legend>
                <input type="text" name="mini_collect_amount" value="" data-mini=“true”/>
                <!-- 理想学 -->
                <legend>目標金額（最大）</legend>
                <input type="text" name="max_collect_amount" value="" data-mini=“true”/>

            </div>
        
        <button type="submit" id="fun_button"/>Fun!</button>

        </form>

  	</div>
</div>