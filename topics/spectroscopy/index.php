<html>
	<?php include "../../includes/header.html"; ?>
	<link rel="stylesheet" href="styles.css" type="text/css"/>
		<title>Spectroscopy</title>
	</head>	
	<body>
		<div class='main'>
			<p class='title'>Spectroscopy</p>
			<hr>
			<p class='subtitle'>General Spectroscopy</p>
			<p>
				The study of the interactions between light and matter is called Spectroscopy. More specifically, spectroscopy is the identification of molecules by analysis of the interaction between electromagnetic radiation and matter in its different states. These interactions may include electronic excitations, molecular vibrations, or nuclear spin orientations. Spectroscopy is useful to organic chemists because it can be used for the identification of unknown compounds and analysis of reaction products. Less than one hundred years ago, structural determination was a difficult and time-consuming task. It was not uncommon for a chemist to spend years determining the structure of an unknown compound. The advent of modern spectroscopy techniques completely transformed the field of chemistry, and structures can now be determined in several minutes.
			</p>
			<br/>
			<hr>
				<p class='subtitle' id='ir'>Infrared Spectroscopy</p>
				<p>
					Infrared Spectroscopy (Vibrational Spectroscopy) is based on the the exposure of a compound to an infrared source. For every bond in a molecule, the energy gap between vibrational states is dependent on the nature of the bond. Each bond will absorb a different frequency, allowing us to determine which types of bonds are present in a compound. Simply irradiate the compound with all frequencies of IR radiation and then detect which frequencies were absorbed. Specifically, IR spectroscopy can be used to identify the presence of functional groups in a compound. Understanding how to analyze the results of IR spectroscopy is useful in organic chemistry because it can be used to identify reaction products and unknown compounds.
				</p>
				</p>
					An IR spectrometer measures the percent transmittance as a function of frequency.
				</p>
				<p>
					This plot is called an absorption spectrum.
				</p>
				<img src="ir1.png" id="ir1"></img>
				<p>
					The frequency is most commonly measured using wavenumber (ṽ) for easy referencing.
				</p>
				<img src="eq1.png" id="eq1"></img>
				<p>
					Where ṽ is wavenumber, v is the frequency of the infrared, and c is the speed of light
					Because of this, wavenumber is also proportional to energy because E=hv


					There are three ways of analyzing an IR spectrum: Wavenumber, Intensity, and Shape

					Wavenumber:
					One can think of a bond between two atoms like a mass system with a spring between. In this system the atoms are constantly vibrating in a manner where they stretch apart and oscillate closer then further. Using hooke's law we can use the bond as a spring system and thus derive the following equation:
				</p>
				<img src="eq2.png" id="eq2"></img>
				<p>
					Here where f is force constant (For this situation bond strength) and&emsp;
					<img src="eq3.png" id="eq3"></img>
					&emsp;is reduced mass.
				</p>
			<br/>
			<hr>
				<p class='subtitle' id='ir'>Mass Spectroscopy</p>
				<p>
					In a mass spectrometer, molecules are ionized and separated by magnets by high-energy electrons; this method, which is labeled as Electron Impact Ionization (EI), generates a radical cation, symbolized by (M)+∙, and is called the molecular ion or parent ion. 
					This ion is particularly unstable and susceptible to fragmentation. Only the molecular ion and cationic fragments are deflected, and they are then separated by their mass-to-charge ratio (m/z).
				</p>
				<p>
					Then this mass spectrum shows the relative abundance of each cation detected, providing an accurate measurement of molecular mass and discovering the accurate molecular formula. 
					In viewing the molecular spectrum, the tallest peak is assigned a relative value of 100% and is called the base peak.
				</p>
		</div>
		<?php include "../../includes/dropdown.html"; ?>
	</body>
</html>