<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<title>ABE Template 2018 | BS4 Template</title>
	<style>
		/*custom page css here*/
		#bargraph {
			background: #eee;
		}

		#tablecontainer {
			padding-left: 20px
		}
		
				.ckey{
			width:100%;
			height:30px;
		}

	</style>
</head>

<body>
	<!-- HTML here. -->
	<h1>Bootstrap 4 template</h1>
	<p><a href="index.html" class="btn-primary btn">Back to Home</a></p>
	<div class="fluid-container">
		<div class="row">
			<div id="graph" class="col">
				<!-- this canvas will contain the line graph. -->
				<canvas id="bargraph" width="710" height="450"></canvas>
			</div>
			<div id="tablecontainer" class="col">
				<!-- This form will contain a table full of inputs -->
				<form id="dataform">
					<table class="table datatable"></table>
				</form>
			</div>
		</div>
	</div>
	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="assets/js/jquery.js"></script>
	<script src="assets/js/popper.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script>
		// Step 1: This function contains an ajax call to get the data in a json file
		function getdata() {
			$.ajax({
				url: 'assets/data/graphdata.json',
				type: 'get',
				dataType: 'JSON',
				cache: false,
				error: function(data) {
					console.log(data);
				},
				success: function(data) {
					// Step 2: when the data is grabbed, do the following to build the graph and table...
					//console.log(data);
					// Step 3: set the data to var 'd'
					d = data;
					// Step 4: init 2 empty arrays for the values and the x axis labels 
					values = [];
					xaxisplots = [];
					// Step 5: empty the table to redraw it
					
										// 360 colors to use
					colors = ['#FF6633', '#FFB399', '#FF33FF', '#FFFF99', '#00B3E6', '#E6B333', '#3366E6', '#999966', '#99FF99', '#B34D4D', '#80B300', '#809900', '#E6B3B3', '#6680B3', '#66991A', '#FF99E6', '#CCFF1A', '#FF1A66', '#E6331A', '#33FFCC', '#66994D', '#B366CC', '#4D8000', '#B33300', '#CC80CC',  '#66664D', '#991AFF', '#E666FF', '#4DB3FF', '#1AB399', '#E666B3', '#33991A', '#CC9999', '#B3B31A', '#00E680', '#4D8066', '#809980', '#E6FF80', '#1AFF33', '#999933', '#FF3380', '#CCCC00', '#66E64D', '#4D80CC', '#9900B3', '#E64D66', '#4DB380', '#FF4D4D', '#99E6E6', '#6666FF', "#63b598", "#ce7d78", "#ea9e70", "#a48a9e", "#c6e1e8", "#648177" ,"#0d5ac1", "#f205e6" ,"#1c0365" ,"#14a9ad" ,"#4ca2f9" ,"#a4e43f" ,"#d298e2" ,"#6119d0", "#d2737d" ,"#c0a43c" ,"#f2510e" ,"#651be6" ,"#79806e" ,"#61da5e" ,"#cd2f00", "#9348af" ,"#01ac53" ,"#c5a4fb" ,"#996635","#b11573" ,"#4bb473" ,"#75d89e", "#2f3f94" ,"#2f7b99" ,"#da967d" ,"#34891f" ,"#b0d87b" ,"#ca4751" ,"#7e50a8", "#c4d647" ,"#e0eeb8" ,"#11dec1" ,"#289812" ,"#566ca0" ,"#ffdbe1" ,"#2f1179", "#935b6d" ,"#916988" ,"#513d98" ,"#aead3a", "#9e6d71", "#4b5bdc", "#0cd36d", "#250662", "#cb5bea", "#228916", "#ac3e1b", "#df514a", "#539397", "#880977", "#f697c1", "#ba96ce", "#679c9d", "#c6c42c", "#5d2c52", "#48b41b", "#e1cf3b", "#5be4f0", "#57c4d8", "#a4d17a", "#225b8", "#be608b", "#96b00c", "#088baf", "#f158bf", "#e145ba", "#ee91e3", "#05d371", "#5426e0", "#4834d0", "#802234", "#6749e8", "#0971f0", "#8fb413", "#b2b4f0", "#c3c89d", "#c9a941", "#41d158", "#fb21a3", "#51aed9", "#5bb32d", "#807fb", "#21538e", "#89d534", "#d36647", "#7fb411", "#0023b8", "#3b8c2a", "#986b53", "#f50422", "#983f7a", "#ea24a3", "#79352c", "#521250", "#c79ed2", "#d6dd92", "#e33e52", "#b2be57", "#fa06ec", "#1bb699", "#6b2e5f", "#64820f", "#1c271", "#21538e", "#89d534", "#d36647", "#7fb411", "#0023b8", "#3b8c2a", "#986b53", "#f50422", "#983f7a", "#ea24a3", "#79352c", "#521250", "#c79ed2", "#d6dd92", "#e33e52", "#b2be57", "#fa06ec", "#1bb699", "#6b2e5f", "#64820f", "#1c271", "#9cb64a", "#996c48", "#9ab9b7", "#06e052", "#e3a481", "#0eb621", "#fc458e", "#b2db15", "#aa226d", "#792ed8", "#73872a", "#520d3a", "#cefcb8", "#a5b3d9", "#7d1d85", "#c4fd57", "#f1ae16", "#8fe22a", "#ef6e3c", "#243eeb", "#1dc18", "#dd93fd", "#3f8473", "#e7dbce", "#421f79", "#7a3d93", "#635f6d", "#93f2d7", "#9b5c2a", "#15b9ee", "#0f5997", "#409188", "#911e20", "#1350ce", "#10e5b1", "#fff4d7", "#cb2582", "#ce00be", "#32d5d6", "#17232", "#608572", "#c79bc2", "#00f87c", "#77772a", "#6995ba", "#fc6b57", "#f07815", "#8fd883", "#060e27", "#96e591", "#21d52e", "#d00043", "#b47162", "#1ec227", "#4f0f6f", "#1d1d58", "#947002", "#bde052", "#e08c56", "#28fcfd", "#bb09b", "#36486a", "#d02e29", "#1ae6db", "#3e464c", "#a84a8f", "#911e7e", "#3f16d9", "#0f525f", "#ac7c0a", "#b4c086", "#c9d730", "#30cc49", "#3d6751", "#fb4c03", "#640fc1", "#62c03e", "#d3493a", "#88aa0b", "#406df9", "#615af0", "#4be47", "#2a3434", "#4a543f", "#79bca0", "#a8b8d4", "#00efd4", "#7ad236", "#7260d8", "#1deaa7", "#06f43a", "#823c59", "#e3d94c", "#dc1c06", "#f53b2a", "#b46238", "#2dfff6", "#a82b89", "#1a8011", "#436a9f", "#1a806a", "#4cf09d", "#c188a2", "#67eb4b", "#b308d3", "#fc7e41", "#af3101", "#ff065", "#71b1f4", "#a2f8a5", "#e23dd0", "#d3486d", "#00f7f9", "#474893", "#3cec35", "#1c65cb", "#5d1d0c", "#2d7d2a", "#ff3420", "#5cdd87", "#a259a4", "#e4ac44", "#1bede6", "#8798a4", "#d7790f", "#b2c24f", "#de73c2", "#d70a9c", "#25b67", "#88e9b8", "#c2b0e2", "#86e98f", "#ae90e2", "#1a806b", "#436a9e", "#0ec0ff", "#f812b3", "#b17fc9", "#8d6c2f", "#d3277a", "#2ca1ae", "#9685eb", "#8a96c6", "#dba2e6", "#76fc1b", "#608fa4", "#20f6ba", "#07d7f6", "#dce77a", "#77ecca", '#FF6633', '#FFB399', '#FF33FF', '#FFFF99', '#00B3E6', '#E6B333', '#3366E6', '#999966', '#99FF99', '#B34D4D', '#80B300', '#809900', '#E6B3B3', '#6680B3', '#66991A', '#FF99E6', '#CCFF1A', '#FF1A66', '#E6331A', '#33FFCC', '#66994D', '#B366CC', '#4D8000', '#B33300', '#CC80CC', '#66664D', '#991AFF', '#E666FF', '#4DB3FF', '#1AB399'];
					
					$(".datatable").empty();
					// Step 6: build the table headers
					$(".datatable").append(`
						<tr>
							<th>Color</th>
							<th>Name</th>
							<th>Value</th>
							</tr>
					`);
					// Step 7: loop through data which are multi-dimensional objects containing x axis labels and values
					for (i in d) {
						// Step 8: push values and x axis labels into their own empty arrays
						values.push(d[i]['sal']);
						xaxisplots.push(d[i]['fName']);
						// Step 9: build the rest of the table generating a row that contains inputs. these inputs have values containing the x axis labels, values of a radio button. Lastly create a delete button that has a value set to the index of the key of the object to delete.
						$(".datatable").append(`
							<tr id="d${i}" class="datarow">
								<td>${d[i]['fName']}</td>
								<td>${d[i]['sal']}</td>
							</tr>
						`);
					};

					// Step 11: to start the graph, find the largest value from the data
					largestvalue = Math.max(...values);

					// Step 14: loop 10 times to find the nearest rounded-up number that's divisible by 10. This number will be the ceiling of the y axis. assign this number to var 'numceil'.
					for (i = 0; i < 10; ++i) {
						if (largestvalue % 10 == 0) {
							numceil = largestvalue;
						} else {
							++largestvalue;
						};
					};

					// Step 15: divide number by 10 to find the incremental values to be used for the y axis
					plot = numceil / 10;
					nextplot = plot;
					// Step 16: start an array to store the y axis labels, starting at 0 followed by the increment value
					yaxisplots = [0, nextplot];
					// Step 17: increment the y axis label and store to array 9 more times. Including 0, we will have 11 y axis values
					for (i = 0; i < 9; ++i) {
						nextplot += plot;
						yaxisplots.push(nextplot);
					};
					// Step 18: reverse the array
					yaxisplots.reverse();
					// Step 19: build the grid for the graph. start by creating the offset on the y axis of 25, create a plot that will increment by 40 to create the lines 40px apart from each other and store in an array.
					gridoffset = 25;
					gridplot = gridoffset;
					gpa = [gridplot];
					// Step 20: select the canvas and clear it out as this function can be called repeatedly
					var c = document.getElementById("bargraph");
					var ctx = c.getContext("2d");
					ctx.clearRect(0, 0, c.width, c.height);
					// Step 21: draw 2 vertical lines
					ctx.beginPath();
					ctx.strokeStyle = "#ccc";
					ctx.lineWidth = "1";
					ctx.moveTo(100, gridoffset);
					ctx.lineTo(100, 425);
					ctx.moveTo(700, gridoffset);
					ctx.lineTo(700, 425);

					// Step 22: loop 10 times to draw 11 horzontal lines 40px apart. as we increment the y coordinates, store them in the 'gpa' array above to use later
					for (i = 0; i < 11; ++i) {
						ctx.moveTo(100, gridplot);
						ctx.lineTo(700, gridplot);
						gridplot += 40;
						gpa.push(gridplot);
					};
					ctx.stroke();

					// Step 23: Create presets for y-axis labels
					ctx.font = "12px arial";
					ctx.textAlign = "right";
					ctx.textBaseline = "middle";
					ctx.fillStyle = "black";
					// Step 24: Loop 11 times, using the array of y-axis labels and the array to y-axis coordinates and draw the labels
					for (i = 0; i < 11; ++i) {
						ctx.fillText(yaxisplots[i], 90, gpa[i]);
					};
					// Step 25: Before creating the x-axis labels, restyle the text baseline to top instead of middle
					ctx.textBaseline = "top";
					ctx.textAlign = "center";

					// Step 26: To space the x-axis labels divide the amout of labels by 600 to get the increment, the width of the graph, then offset the increment by the left margin, 100px. Lastly, create an array to store the x-axis coordinates
					xplots = 600 / xaxisplots.length;
					xplots = Math.floor( xplots );
					xplotfirst = xplots;
					lpa = [xplotfirst];

					// Step 27: loop through x-axis labels to create the labels and vertical grid lines at each incremental coordinate. store the coordinates in the array above
					for (i = 0; i < xaxisplots.length; ++i) {
						console.log(xplotfirst);
						ctx.fillText(xaxisplots[i], 100 + xplotfirst - ( xplots / 2 ), 430);
						xplotfirst += xplots;
						lpa.push(xplotfirst);
						
					};
					// Step 29: loop through values to plot the next point in the line, get th x coordinates the the x coord array and  use the following formula for the y coordinates:
					//value / ceiling number X height of the grid (400px) then offset the coordinate due to the spacing for the y-axis labels. Finally subtract 400px so the lower the number, the lower the position
					for (i = 0; i < values.length; ++i) {
						ycoor = ( 400 - ((values[i] / numceil) * 400) + gridoffset );
						console.log(lpa[i]);
						console.log(xplots/2);
						ctx.beginPath();
						ctx.rect(lpa[i] - ( xplots ) + 100, ycoor, xplots - 1, (values[i] / numceil) * 400);
						ctx.fillStyle = colors[i];
						ctx.fill();
//						ctx.lineTo(lpa[i], (400 - ((values[i] / numceil) * 400) + gridoffset));
						$('.datarow:eq('+i+')').prepend(`<td><div class="ckey" style="background:${colors[i]};"></div></td>`);
					};
					//Step 30: Style the graph line

					// Step 31: Loop through again to draw graph points and text of values
					for (i = 0; i < values.length; ++i) {
						ctx.beginPath();
						ctx.textBaseline = "bottom";
						ctx.textAlign = "center";
						ctx.fillStyle = "black";
						ctx.fillText(values[i], 100 + lpa[i] - ( xplots / 2 ), (400 - ((values[i] / numceil) * 400) + 25));
					};
				}
			});
		};

		//Step 32: run the graph builder on page load
		getdata();

		// Step 33: function to create a new table row with unique key to use in json.
		$(document).on('click', '.addAnotherBtn', function() {
			newid = $(this).parents('tr').prev().attr('id');
			newid = newid.replace('d', '');
			newid = Number(newid);
			++newid;
			var addAnother = $(this).parents('tr').before(`<tr id="d${newid}">
						<td>
							<div class="ckey" style="background:${colors[newid]};"></div>
						</td>
						<td>
							<input type="text" name="x${newid}">
						</td>
						<td>
							<input type="text" name="v${newid}">
						</td>
						<td>
							<input type="radio" name="delete" value="${newid}">
						</td>
					</tr>`);
			return false;
		});



	</script>
</body>

</html>
