google.charts.load('current', {'packages':['corechart']});

function onLoadGraph() {
	google.charts.setOnLoadCallback(piechart);
	google.charts.setOnLoadCallback(company);
	google.charts.setOnLoadCallback(goo);
	google.charts.setOnLoadCallback(yandex);
};

var piechartVar1 = 100,
		piechartVar2 = 150,
		piechartVar3 = 200,
		companyVar1 = 42,
		companyVar2 = 58,
		gooVar1 = 16,
		gooVar2 = 26,
		gooVar3 = 58,
		yandexVar1 = 16,
		yandexVar2 = 26,
		yandexVar3 = 58;

function piechart() {

	var data = google.visualization.arrayToDataTable([
		['desc', 'var'],
		[piechartVar1 + ' млн', piechartVar1],
		[piechartVar2 + ' млн', piechartVar2]
		]);

	var options = {
		legend: 'none',
		pieSliceText: 'label',
		pieSliceTextStyle: {
			fontSize: 30,
			color: '#fff',
		},
		slices: {
			0: { color: '#02B2C4' },
			1: { color: '#00B290' },
			2: { color: '#A1B720' }
		}
	};

	var chart = new google.visualization.PieChart(document.getElementById('piechart'));
	chart.draw(data, options);
}

function company() {

	var data = google.visualization.arrayToDataTable([
		['desc', 'var'],
		[companyVar1 + '%', companyVar1],
		[companyVar2 + '%', companyVar2],
		]);

	var options = {
		legend: 'none',
		pieSliceText: 'label',
		pieSliceTextStyle: {
			fontSize: 40,
			color: '#fff',
		},
		slices: {
			0: { color: '#A1B720' },
			1: { color: '#02B2C4' }
		}
	};

	var chart = new google.visualization.PieChart(document.getElementById('company'));
	chart.draw(data, options);
}

function goo() {

	var data = google.visualization.arrayToDataTable([
		['desc', 'var'],
		[gooVar1 + '%', gooVar1],
		[gooVar2 + '%', gooVar2],
		[gooVar3 + '%', gooVar3]
		]);

	var options = {
		legend: 'none',
		pieSliceText: 'label',
		pieSliceTextStyle: {
			fontSize: 40,
			color: '#fff',
		},
		slices: {
			0: { color: '#003193' },
			1: { color: '#0971D8' },
			2: { color: '#02B2C4' }
		}
	};

	var chart = new google.visualization.PieChart(document.getElementById('goo'));
	chart.draw(data, options);
}

function yandex() {

	var data = google.visualization.arrayToDataTable([
		['desc', 'var'],
		[yandexVar1 + '%', yandexVar1],
		[yandexVar2 + '%', yandexVar2],
		[yandexVar3 + '%', yandexVar3]
		]);

	var options = {
		legend: 'none',
		pieSliceText: 'label',
		pieSliceTextStyle: {
			fontSize: 40,
			color: '#fff',
		},
		slices: {
			0: { color: '#065949' },
			1: { color: '#03896F' },
			2: { color: '#A1B720' }
		}
	};

	var chart = new google.visualization.PieChart(document.getElementById('yandex'));
	chart.draw(data, options);
}


/*- tables -*/

function cellCounter() {
	//высота страницы
	var maxTableHeight = 2250,

	//кол-во таблиц на странице
	tables = document.getElementsByClassName('wrapper--table').length,
	reserveTableOne,
	reserveTableTwo,
	t1 = [],
	t2 = [],
	del,
	i,
	//переменная счётчика таблиц
	tableScore;

	//просматриваем все таблицы на странице
	for (tableScore = 0; tableScore < tables; tableScore++) {
		//если находим таблицу, высота которой превышает высоту страницы
		if (document.getElementsByClassName('wrapper--table')[tableScore].offsetHeight > maxTableHeight + 2) {
			//создаём враппер
			var wrap = document.createElement('div'),
			//создаём таблицу
			newPageTable = document.createElement('table');
			//проверяем, где находится таблица настранице
			if (tableScore == 0) {
				//добалвяем враппер класс, для добавления в неё таблицы
				wrap.className = "wrapper wrapper--google_after";
				//добавляем класс таблице
				newPageTable.className = "google_after";
				//добавляем id таблицы
				newPageTable.id = "t_google";
				//вставляем враппер после google таблицы
				document.querySelectorAll("div.wrapper--google")[0].appendChild(wrap);
				//вставляем в новый враппер таблицу
				document.querySelectorAll("div.wrapper--google_after")[0].appendChild(newPageTable);
			} else if (tableScore == 1) {
				//добалвяем враппер класс, для добавления в неё таблицы
				wrap.className = "wrapper wrapper--yandex_after";
				//добавляем класс таблице
				newPageTable.className = "yandex_after";
				//добавляем id таблицы
				newPageTable.id = "t_yandex";
				//вставляем враппер после яндекс таблицы
				document.querySelectorAll("div.wrapper--yandex")[0].appendChild(wrap);
				//вставляем в новый враппер таблицу
				document.querySelectorAll("div.wrapper--yandex_after")[0].appendChild(newPageTable);
			};
			//переменная счётчика кол-ва строк в таблице
			var lineScore,
			//переменная счётчика суммы высоты строк ("20" - верхний border-spacing)
			trHeight = 20;
			//просматриваем все строки в таблице, кроме последней
			for (lineScore = 0; lineScore < document.querySelectorAll('table.begin').item(tableScore).getElementsByTagName('tr').length-1; lineScore++) {
				//суммируем высоту всех строк в таблице ("+20" - нижний border-spacing) и записывем в переменную
				trHeight = trHeight + document.querySelectorAll('table.begin')[tableScore].getElementsByTagName('tr')[lineScore].offsetHeight + 20;
				//добавляем к строкам (кроме первой) дата-атрибут со значением равным высоте от начала таблицы до этой строки
				document.querySelectorAll('table.begin')[tableScore].getElementsByTagName('tr')[lineScore+1].setAttribute("data-height", trHeight);
				//если строка находится ниже высоты страницы
				if (trHeight >= maxTableHeight) {
					//добавляем класс для выделения строк, не помещающихся на страницу
					document.querySelectorAll('table.begin')[tableScore].getElementsByTagName('tr')[lineScore+1].classList.add('next_page');
					//собираем строки, которые не поместились на страницу
					reserveTableOne = document.querySelectorAll('table.begin')[0].getElementsByClassName('next_page');
					reserveTableTwo = document.querySelectorAll('table.begin')[1].getElementsByClassName('next_page');
				};
			};
		};
	};

	//клонируем строки для переноса в новую таблицу
	for (i = 0; reserveTableOne.length > i; i++) {
		t1.push(reserveTableOne[i]);
	};
	for (i = 0; reserveTableTwo.length > i; i++) {
		t2.push(reserveTableTwo[i]);
	};

	//удаляем строки, которые не поместились на страницу
	for (i = 0; document.querySelectorAll('table.begin')[0].getElementsByClassName('next_page').length > i; i++) {
		del = document.querySelectorAll('table.begin')[0].getElementsByClassName('next_page')[i];
		del.remove();
	};
	for (i = 0; document.querySelectorAll('table.begin')[1].getElementsByClassName('next_page').length > i; i++) {
		del = document.querySelectorAll('table.begin')[1].getElementsByClassName('next_page')[i];
		del.remove();
	};

	//вставляем склонированые строки
	for (i = 0; t1.length > i; i++) {
		var el = document.querySelectorAll('table.google_after');
		t_google.appendChild(t1[i]);
	};
	for (i = 0; t2.length > i; i++) {
		var el = document.querySelectorAll('table.yandex_after');
		t_yandex.appendChild(t2[i]);
	};
};

document.addEventListener("DOMContentLoaded", cellCounter);
document.addEventListener("DOMContentLoaded", onLoadGraph);