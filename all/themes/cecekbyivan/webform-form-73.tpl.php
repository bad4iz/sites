<table border="0" cellpadding="0" cellspacing="0">

<tr>
<td><i>Название организации*</i>
<td><?php print drupal_render($form['submitted']['name']); ?>

<tr>
<td><i>ИНН*</i>
<td><?php print drupal_render($form['submitted']['inn']); ?>

<tr>
<td><i>Город*</i>
<td><?php print drupal_render($form['submitted']['gorod']); ?>

<tr>
<td><i>Контактное лицо*</i>
<td><?php print drupal_render($form['submitted']['contact_name']); ?>

<tr>
<td><i>тел.*</i>
<td><?php print drupal_render($form['submitted']['kontakty_phone']); ?>

<tr>
<td><i>e-mail:*</i>
<td><?php print drupal_render($form['submitted']['kontakty']); ?>

</table>

<p align="center"><font size="4"><i>Краткий запрос на продукцию</i></font></p>
<p><font size="2">(опишите какой кирпич вам нужен в каком количестве, куда доставить? Или вам необходим прайс на всю продукцию?)</font></p>

<?php print drupal_render($form['submitted']['kratkiy_zapros_na_produkciyu']); ?>

<?php print drupal_render_children($form);?>