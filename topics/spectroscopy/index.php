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
			<hr id='ir'>
				<p class='subtitle'>Infrared Spectroscopy</p>
				<p>
					Infrared Spectroscopy (Vibrational Spectroscopy) is based on the the exposure of a compound to an infrared source. For every bond in a molecule, the energy gap between vibrational states is dependent on the nature of the bond. Each bond will absorb a different frequency, allowing us to determine which types of bonds are present in a compound. Simply irradiate the compound with all frequencies of IR radiation and then detect which frequencies were absorbed. Specifically, IR spectroscopy can be used to identify the presence of functional groups in a compound. Understanding how to analyze the results of IR spectroscopy is useful in organic chemistry because it can be used to identify reaction products and unknown compounds. An IR spectrometer measures the percent transmittance as a function of frequency.
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


					There are three ways of analyzing an IR spectrum: <a href='/HyperOChem/topics/spectroscopy#wavenumber'>Wavenumber</a>, <a href='/HyperOChem/topics/spectroscopy#intensity'>Intensity</a>, and <a href='/HyperOChem/topics/spectroscopy#shape'>Shape</a>
				</p>
				<p class='subsubtitle' id="wavenumber">Wavenumber</p>
				<p>
					One can think of a bond between two atoms like a mass system with a spring between. In this system the atoms are constantly vibrating in a manner where they stretch apart and oscillate closer then further. Using hooke's law we can use the bond as a spring system and thus derive the following equation:
					<br/>
					<img src="eq2.png" id="eq2"></img>
					&emsp;Here where f is force constant (For this situation bond strength) and 
					<img src="eq3.png" id="eq3"></img>
					is reduced mass.
				</p>
				<br/>
				<br/>
				<p>
					Because f (bond strength) is in the numerator, the strongest bonds have the highest wavenumbers.
					<br/>
					For example:
					<br/>
					C ≡ H&emsp;C = N&emsp;C - N
					<br/>
					2200&emsp; 1600&emsp; 1100
					<br/>
				</p>
				<p>
					Because reduced mass is in the denominator, the smallest atoms have the highest wavenumbers.
					<br/>
					For example:
					<br/>
					C - H&emsp;C - D&emsp;C - O&emsp;C - Cl
					<br/>
					3000&emsp;2200&emsp;1100&emsp; 700
				</p>
				<p>
					Combining these two: we can summarize the ranges of wavenumber
					<br/>
					Bonds to H    | Triple Bonds  | Double Bonds   |  Single Bonds with Larger Atoms
				</p>
				<p>
					The wavenumber from around 1600 - 4000 is called the diagnostic region while the range of 600-1400 is called the fingerprint region. The diagnostic region is the area we look at when we analyze an IR spectrum. This is because it has distinct lines that are easier to identify, while the fingerprint region is more jumbled and easy to mistake one type of single bond for a bent bond of another etc.
				</p>
				<p class='subsubtitle' id="intensity">Intensity</p>
				<p>
					Intensity is the measure of absorption of the IR radiation. On an IR spectrum, intensity is shown by how far down the spectrum dips. Because bonds between atoms have a dipole moment and because these atoms vibrate and stretch, the dipole molecule is changing and oscillating. This oscillating dipole creates an electric field which helps to absorb infrared radiation like an antenna. This has two major effects on the spectrum.

					The stronger the dipole moment of the two atoms, the greater the electric field that is created by its oscillation. This means that the dipole acts as a stronger “antenna” and thus absorbs more infrared radiation. 

					For example: A C = O bond dips much farther on the spectrum than does a C = C bond.
					Due to this, carbonyls are typically very easy to identify in an IR spectrum.

					Another factor that must be considered in intensity is the symmetry of a molecule. A strong
					C = C or C ≡ C may still not show up despite it’s wavenumber if the atoms around the bond are symmetrical. This is because the “antenna” effect will not happen when the atoms are all symmetrically arranged around the bond, so the bond will absorb no infrared radiation and will not show up on the IR spectrum.
				</p>
				<p class='subsubtitle' id="shape">Shape</p>
				<p>
					Shape is not quantitative, rather one approaches shape for a general understanding of trends and what is going on in the atoms. Shape describes the broadness of the intensity peak, along with any irregularities in the structure of the peak.
					<br/>
					<br/>
					<center>
						<img src="ir3.png" id="ir3"></img>
					</center>
					<br/>
					A broad signal typically comes from hydrogen bonding because the bonding is weakened which distributes the electron density. In a non-polar solvent, however, OH groups have no hydrogen bonding, so they can still show up as narrow peaks. Using IR spectroscopy in a polar and nonpolar solvent helps identify everything. Carboxylic acids are broad in polar solvents because the dipole moment of the C = O bond also creates hydrogen bonding.
					<br/>
					<br/>
					The last thing to look for in shape are bumps, these happen when there are two types of stretching happening simultaneously in a bond which means slightly different absorbances in the peaks. For example, an NH2 or CH2 group has symmetric and asymmetric stretching as shown below.
					<br/>
					<center>
					<img src="ir4.png" id="ir4"></img>
					<br/>
					&emsp;|Symmetric Stretching|&emsp;&emsp;&emsp;|Asymmetric Stretching|
					</center>
					<br/>
					This results in small humps in the IR spectrum. Below, the NO2 molecule has the two humps, one from the N-O bond with symmetric stretching, and the other from the N-O bond with asymmetric stretching.
					<br/>
					<br/>
					<img src="ir5.png" id="ir5"></img>
				</p>
			<br/>
			<hr id='ms'>
				<p class='subtitle'>Mass Spectroscopy</p>
				<p>
					In a mass spectrometer, molecules are ionized and separated by magnets by high-energy electrons; this method, which is labeled as Electron Impact Ionization (EI), generates a radical cation, symbolized by (M)+∙, and is called the molecular ion or parent ion. 
					This ion is particularly unstable and susceptible to fragmentation. Only the molecular ion and cationic fragments are deflected, and they are then separated by their mass-to-charge ratio (m/z).
					<br/>
					<br/>
					Then this mass spectrum shows the relative abundance of each cation detected, providing an accurate measurement of molecular mass and discovering the accurate molecular formula. 
					In viewing the molecular spectrum, the tallest peak is assigned a relative value of 100% and is called the base peak.
					<br/>
					<img src="ir6.png" id="ir6"></img>
					<br/>
					<br/>
					Moreover, in discovering the molecular formula, we follow the nitrogen rule, which states that an odd molecular weight indicates an odd number of nitrogen atoms and an even molecular weight either signifies an even number of nitrogen atoms or an absence of nitrogen atoms. 
					And additionally, the relative heights of the (M)+and (M+1)+  peaks indicate the number of carbon atoms.
					More useful information can be obtained from comparing the relative heights between the (M+2)+and (M)+ peaks: if the latter peak is approximately one-third as tall as the former peak, the structure likely contains a chlorine atom and if the two peaks are similar in height, there is likely a bromine atom in the structure.
					A signal at M-15 indicates the loss of a methyl group; a signal at M-29 indicates the loss of an ethyl group.
					The actual molecular formula of a compound can be determined with high resolution mass spectrometry.
					In a gas chromatograph-mass spectrometer, a mixture of compounds is first separated based on their boiling points and affinity for the ‘stationary phase’, then each compound is then analyzed individually.     
					<br/>
					<br/>
					<img src="ir7.png" id="ir7"></img>
					<br/>
					<br/>
					<br/>
					<center>
						-Ultraviolet-Visible Spectroscopy-the UV light excites the electrons, indicating electron dense (pi-conjugated) systems (multiple bonds, with free electrons); allows for accurate pictures of multiple bonds
						<br/>
						<img src="ir8.png" id="ir8"></img>
						<br/>
						<br/>
						-Infrared-
						<br/>
						<img src="ir9.png" id="ir9"></img>
						<br/>
						<br/>
						<img src="ir10.png" id="ir10"></img>
						<br/>
						<br/>
						-Nuclear Magnetic Resonance-
						<br/>
						<img src="ir11.png" id="ir11"></img>
						<br/>
					</center>
				</p>
			<br/>
			<hr id='nmr'>
				<p class='subtitle'>Nuclear Magnetic Resonance</p>
				<p>
					Electromagnetic radiation is used to obtain info on the nuclei of the atoms, further identifying the specific arrangement of all carbon and hydrogen atoms in the compound.
				</p>
		</div>
		<?php include "../../includes/dropdown.html"; ?>
	</body>
</html>