<?
include 'header.php';
?>

<!--	подключение скрипта, расчета кратности количества кирпича в поллете, в поле ввода карточки товара-->
<!--<script src="/sites/all/themes/cecekbyivan/js/castom_lib/quantity_per_pallet.js"></script>-->
<!--	подключение скрипта, расчета кратности количества кирпича в поллете, в поле ввода корзины-->
<script src="/sites/all/themes/cecekbyivan/js/castom_lib/quantity_per_pallet_cart.js"></script>



<div class="fon">
	<div class="container">
		<div class="col-md-8">
			<h1 class="nodetit"><?php print $title; ?></h1>
		</div>
		<div class="col-md-4"></div>
	</div>
</div>


<div id="newsblock">
	<div class="container">
		<div class="col-md-8 second">
			<?php if ($tabs):?>
				<div class="tabs">
					<?php print render($tabs); ?>
				</div>
			<?php endif; ?>
			<!-- EOF: #tabs -->
			<?php if (isset($page['content'])) { print render($page['content']); } ?>
			<?php if (!empty($page['content_bottom'])): ?>
				<?php print render($page['content_bottom']); ?>
			<?php endif; ?>
		</div>
		<div class="col-md-4">
			<?php if (!empty($page['sidebar_second'])): ?>
				<?php print render($page['sidebar_second']); ?>
			<?php endif; ?>
		</div>
	</div>
</div>


<footer>
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				&copy; OOO "Волжский Кирпичный Завод"

			</div>
			<div class="col-md-8">
				<ul class="nav navbar-nav">
					<li>
						<a href="/" class="nodec">Главная</a>
					</li>
					<li>
						<a href="/page/proizvodstvo-kirpicha.html" class="nodec" title="Производство кирпича">Производство</a>
					</li>
					<li>
						<a href="/page/o-zavode.html" class="nodec">О заводе</a>
					</li>
					<li>
						<a href="/catalog-kalculator.html" class="nodec">Купить кирпич</a>
					</li>
					<li>
						<a href="/gallery" class="nodec">Галерея</a>
					</li>
					<li>
						<a href="/page/kontakty.html" class="nodec">Контакты</a>
					</li>
					<li>
						<a href="/page/kalkulyator-kirpicha.html" class="nodec" title="Расчет кладки кирпича">Калькулятор</a>
					</li>



				</ul>
			</div>
		</div>
		<div class="row second">
			<div class="collapse" id="collapseExample">
				<img src="/sites/default/files/map2.png" width="100%" />
			</div>
		</div>
		<div class="row second">
			<div class="col-md-3">
				<p><a class="colorbox-node nodec" href="/page/dileram-i-partneram.html" >Дилерам и оптовикам</a></p>
			</div>
			<div class="col-md-4">
				<p>413080, Саратовская область, Марксовский район, с. Бородаевка.
					<a data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">Схема проезда</a></p>
			</div>
			<div class="col-md-3 phone">8 8453 <strong>761-761</strong></div>
			<div class="col-md-2 lastmenu">
				<a href="https://vk.com/oblicovochnyj_kirpich_cena" title="Группа ВКЗ ВКонтакте"><img src="/sites/default/files/vk.png" width="25"></a><br>
				<a href="#" target="_blank" class="nodec">Обратная связь</a><br />
				<a href="/page/karta-sayta.html" target="_blank" class="nodec">Карта сайта</a>
			</div>
		</div>
	</div>

	<!-- Yandex.Metrika counter --><div style="display:none;"><script type="text/javascript">(function(w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter12862783 = new Ya.Metrika({id:12862783, enableAll: true, webvisor:true}); } catch(e) { } }); })(window, "yandex_metrika_callbacks");</script></div><script src="//mc.yandex.ru/metrika/watch.js" type="text/javascript" defer="defer"></script><noscript><div><img src="//mc.yandex.ru/watch/12862783" style="position:absolute; left:-9999px;" alt="" /></div></noscript><!-- /Yandex.Metrika counter -->

	<!--LiveInternet counter--><script type="text/javascript"><!--
		document.write("<a href='http://www.liveinternet.ru/click' "+
			"target=_blank><img src='//counter.yadro.ru/hit?t57.6;r"+
			escape(document.referrer)+((typeof(screen)=="undefined")?"":
			";s"+screen.width+"*"+screen.height+"*"+(screen.colorDepth?
				screen.colorDepth:screen.pixelDepth))+";u"+escape(document.URL)+
			";"+Math.random()+
			"' alt='' title='LiveInternet' "+
			"border='0' width='88' height='31'><\/a>")
		//--></script><!--/LiveInternet-->
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
				(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-9272306-2', 'auto');
		ga('send', 'pageview');

	</script>

	<!-- Rating@Mail.ru counter -->
	<script type="text/javascript">
		var _tmr = _tmr || [];
		_tmr.push({id: "2690793", type: "pageView", start: (new Date()).getTime()});
		(function (d, w, id) {
			if (d.getElementById(id)) return;
			var ts = d.createElement("script"); ts.type = "text/javascript"; ts.async = true; ts.id = id;
			ts.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//top-fwz1.mail.ru/js/code.js";
			var f = function () {var s = d.getElementsByTagName("script")[0]; s.parentNode.insertBefore(ts, s);};
			if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); }
		})(document, window, "topmailru-code");
	</script><noscript><div style="position:absolute;left:-10000px;">
			<img src="//top-fwz1.mail.ru/counter?id=2690793;js=na" style="border:0;" height="1" width="1" alt="Рейтинг@Mail.ru" />
		</div></noscript>
	<!-- //Rating@Mail.ru counter -->

	<script>
//		изменение слова Billing information
		var  Bi = $('fieldset#edit-customer-profile-billing span.fieldset-legend').text();
		if (Bi == "Billing information") {
			$('fieldset#edit-customer-profile-billing span.fieldset-legend').text('Информация о платильщике');
		}
		//		изменение слова Order total
		var  Bi = $('td.component-title').text();
		if (Bi == "Order total") {
			$('td.component-title').text('Итого');
		}
	</script>

</footer>