<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<?php use Bitrix\Main\Localization\Loc; ?>

            <div class="menu-block popup-wrap">
                <a href="" class="btn-menu btn-toggle"></a>
                <? if (!empty($arResult)) { ?>
                <div class="menu popup-block">
                    <ul class="">
                        <li class="main-page"><a href=""><?= Loc::getMessage("MENU_ITEM_GENERAL") ?></a>
                        </li>
                        <?
                        $previousLevel = 0;
                        foreach ($arResult as $arItem) { ?>

                            <? if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel) { ?>
                                <?= str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"])); ?>
                            <? } ?>

                            <? if ($arItem["IS_PARENT"]) { ?>
                                <? if ($arItem["DEPTH_LEVEL"] == 1) { ?>
                                    <li><a href="<?= $arItem["LINK"] ?>"><?= $arItem["TEXT"] ?></a><ul>
                                     <? if(isset($arItem["PARAMS"]["SUB_TITLE"])) { ?>
                                        <div class="menu-text"><?=$arItem["PARAMS"]["SUB_TITLE"]?></div>
                                    <? } ?>

                                <? } else { ?>
                                    <li><a href="<?= $arItem["LINK"] ?>"><?= $arItem["TEXT"] ?></a><ul>
                                    <? if(isset($arItem["PARAMS"]["SUB_TITLE"])) { ?>
                                        <div class="menu-text"><?=$arItem["PARAMS"]["SUB_TITLE"]?></div>
                                    <? } ?>
                                <? } ?>
                            <? }
                            elseif ($arItem["PERMISSION"] > "D") { ?>
                                <? if($arItem["DEPTH_LEVEL"] == 1) { ?>
                                    <li><a href="<?= $arItem["LINK"] ?>"><?= $arItem["TEXT"] ?></a></li>
                                <? } else { ?>
                                    <li><a href="<?= $arItem["LINK"] ?>"><?= $arItem["TEXT"] ?></a></li>
                                <? } ?>
                            <? } ?>
                        <? $previousLevel = $arItem["DEPTH_LEVEL"]; ?>
                        <? } ?>
                        <? if ($previousLevel > 1) {?>
                            <?= str_repeat("</ul></li>", ($previousLevel - 1)); ?>
                        <? } ?>
                    </ul>
                    <a href="" class="btn-close"></a>
                </div>
                <div class="menu-overlay"></div>
                <? } ?>