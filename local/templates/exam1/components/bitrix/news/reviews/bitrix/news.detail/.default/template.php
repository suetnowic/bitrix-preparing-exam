<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>

<div class="review-block">
    <div class="review-text">
        <div class="review-text-cont">
            <? if($arResult["DETAIL_TEXT"] <> '') { ?>
            <?= $arResult["DETAIL_TEXT"];?>
            <? } ?>
        </div>
        <div class="review-autor">
            <?if($arParams["DISPLAY_NAME"]!="N" && $arResult["NAME"]) { ?>
                <?=$arResult["NAME"]?>,
            <? } ?>
            <?if($arParams["DISPLAY_DATE"]!="N" && $arResult["DISPLAY_ACTIVE_FROM"]) { ?>
                <?=$arResult["DISPLAY_ACTIVE_FROM"]?> г.,
            <? } ?>
            <?if($arResult["PROPERTIES"]["POSITION"]) { ?>
                <?=$arResult["PROPERTIES"]["POSITION"]["VALUE"]?>,
            <? } ?>
            <?if($arResult["PROPERTIES"]["COMPANY"]) { ?>
                <?=$arResult["PROPERTIES"]["COMPANY"]["VALUE"]?>.
            <? } ?>
        </div>
    </div>
    <div style="clear: both;" class="review-img-wrap">
        <?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arResult["DETAIL_PICTURE"])) { ?>
            <img src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" alt="<?=$arResult["DETAIL_PICTURE"]["ALT"]?>">
        <? } else { ?>
            <img src="<?=SITE_TEMPLATE_PATH?>/img/rew/no_photo.jpg" alt="img">
        <? } ?>

    </div>
</div>

<?php if ($arResult["DISPLAY_PROPERTIES"]["DOCUMENTS"]) { ?>
    <div class="exam-review-doc">
        <p><?=GetMessage("DOCUMENTS")?></p>
        <? foreach ($arResult["DISPLAY_PROPERTIES"]["DOCUMENTS"]["FILE_VALUE"] as $arDocuments) { ?>
       <div class="exam-review-item-doc">
           <img class="rew-doc-ico" src="<?=SITE_TEMPLATE_PATH?>/img/icons/pdf_ico_40.png">
           <a href="<?=$arDocuments["SRC"]?>" download="<?=$arDocuments["ORIGINAL_NAME"]?>"><?=$arDocuments["ORIGINAL_NAME"]?></a>
       </div>
        <? } ?>
    </div>
 <?php } ?>

<hr>

