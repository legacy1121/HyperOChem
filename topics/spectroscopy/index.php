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
				<center>
					<p class='subsubtitle'>-Infrared Spectroscopy-</p>
					<p>
						<img src="ir9.png" id="ir9"></img>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<img src="ir10.png" id="ir10"></img>
					</p>
				</center>
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
				<center>
					</p>
					<p class='subsubtitle'>-Mass Spectroscopy-</p>
					</p>
						<img src="ir7.png" id="ir7"></img>
					<p>
				</center>
			<br/>
			<hr id='nmr'>
				<p class='subtitle'>Nuclear Magnetic Resonance</p>
				<p>
					Electromagnetic radiation is used to obtain info on the nuclei of the atoms, further identifying the specific arrangement of all carbon and hydrogen atoms in the compound.
				</p>
				<p>
					Nuclei with odd numbers of protons/neutrons have a quantum trait of nuclear spin--can be measured by an NMR spectrometer.
				</p>
				<p>
					Spinning protons create a magnetic field called a magnetic moment--measured commonly on 1H and 13C because of the magnetic moments in the nuclei.
				</p>
				<p>
					When subjected to an external magnetic field, the magnetic moment and the magnetic field interact, and that interaction quantized, causing the proton to align either with or against the external field. An alpha proton is aligned with the external field, and the beta protons against. The beta spin state is of higher energy than the alpha state. The electromagnetic radiation can cause an alpha proton the flip to a beta spin state if there is enough energy provided by the radiation. When flipped, the nucleus is said to be in resonance (NOT the resonance we are used to with compounds), hence nuclear magnetic resonance. However, electrons and their shielding can cause a gap in the amount of radiation the nuclei absorb and the amount of radiation provided.
				</p>
				<p>
				<p class='subsubtitle' id='dia'>Diamagnetism:</p>
				<p>
					Nuclei are surrounded by electrons. In the presences of an external magnetic field, the electron density circulates, which produces a local magnetic field that opposes the external magnetic field. Without this effect, all protons would absorb the same frequency of rf radiation, and we wouldn't gain any useful information through NMR
				</p>
				<p>
					The small, induced magnetic field (caused by the electron density circulating around a proton) has an important (though small) effect on the proton. 2 magnetic fields are now acting on the proton, the weak induced magnetic field established by the circulation electron, and the strong external magnetic field. The proton therefore experiences a net magnetic field strength that is slightly smaller than the external magnetic field. The proton is, in this way, shielded by the electrons.
				</p>
				<p>
					Some protons are surrounded by less electron density, and are less shielded, or deshielded, while others are surrounded by more electron density and are more shielded. (The more electron density circulating a proton, the more shielding). As a result, protons in different electronic environments will exhibit a different energy gap between alpha and beta spin states, and therefore will absorb different frequencies of rf radiation: this allows us to probe the electronic environment of each hydrogen atom in a molecule.
				</p>
				<p>
					The magnetic field establishes an energy gap between spin states, which enables the nuclei to absorb rf radiation. The magnitude of this energy gap depends on the strength of the imposed external magnetic field. The energy gap increases with increasing magnetic field strength. The strength of the magnetic field determines the range of frequencies that must be used for NMR Spectroscopy
				</p>
				<p>
					The strong magnetic fields employed in NMR Spectroscopy are produced by passing a current of electrons through a loop composed of superconducting materials (which offer virtually 0 resistance to electric currents, allowing for large magnetic fields to be produced). The superconducting materials only maintain their properties at extremely low temperatures (just a few degrees above absolute zero) and must be kept in a low temperature container.
				</p>
				<p>
					There are 3 traits of an NMR signal--location of each signal reflects the electronic environment of the protons producing the signal; area under the signal indicates the number of protons giving rise to the signal; shape of the signal reflect the number of neighboring protons
				</p>
				<p>
					Protons that are in identical electrical environments are chemically equivalent; they will only produce one signal and can be interchanged by rotation or reflection (symmetrically); homotopic protons are exact equivalents and can be directly interchanged--if either proton was replaced, the molecule could be flipped to be the same; protons that are direct reflections of each other (as if there is a chiral carbon) still share a plane of symmetry, and these protons are considered enantiotopic; diastereotopic protons are not chemically equivalent and produce separate signals
				</p>
				<p class='subsubtitle' id='cshift'>Chemical Shift:</p>
				</p>
					The first (of three) characteristics of every signal in an NMR spectrum. It is the location of the signal, which is defined relative to the frequency of absorption of a reference compound, TMS (tetramethylsilane).
				</p>
				<p>
					In practice, deuterated are solvents used for NMR spectroscopy typically contain a small amount of TMS, which produces a signal at a lower frequency than the signals produced by most organic compounds. The frequency of each signal is described as the difference (in hertz) between the resonance frequency of the proton being observed and that of TMS divided by the operating frequency of the spectrometer.
					<br/>
					<br/>
					<br/>
					<img src="ir12.png" id="ir12"></img>
					<br/>
					TMS (Silicon with four methyl groups) is used as reference because it is soluble in most organic solvents, is inert, volatile and has 12 hydrogen atoms.&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<img src="ir13.png" id="ir13"></img>
				</p>
				<br/>
				<br/>
				<br/>
				<br/>
				<p>
					The area under each signal on proton NMR is integration--it indicates the number of protons giving rise to the signal (as many chemically equivalent protons can give off one signal). The areas of several signals on one spectrum are taken, and the areas are divided by the smallest area recorded to find the respective number, or relative number of protons emitting each signal.
				</p>
				<p>
					Multiplicity of each signal--number of peaks on a single signal; singlet (1), doublet (2), triplet (3), quartet (4), quintet (5), etc. until a multiplet are common notations for the respective number of peaks; multiplicity is a result of neighboring protons--indicator of the number of neighboring protons; spin-spin splitting, or coupling is a result of a neighboring protons splitting a signal into multiple peak;multiplicity=number of neighboring protons + 1(n+1 rule); scalar intensities of peaks: doublet = 1 and 1, triplet = 1 and 2 and 1, quartet = 1 and 3 and 3 and 1, quintet = 1 and 4 and 6 and 4 and 1, sextet = 1 and 5 and 10 and 10 and 5 and 1, septet = 1 and 6 and 15 and 20 and 15 and 6 and 1; if protons are separated by more than three sigma bonds, splitting is usually not observed (only with rigid/bicyclic structures); equivalent molecules do not split each other; coupling constant, or j value is measured in hertz--distance between peaks in one signal, neighboring protons have equivalent j values, as they impact each other with the same values--patterns are seen commonly with the 1H spectrum; hydroxyl protons are labile because of the rapid rate at which they are exchanged--no splitting is observed due to the fast rate of the signal; aldehydic protons couple weakly with their neighbors, and if the j value is too small, splitting will not be observed.
				</p>
				<br/>
				<center>
					</p>
					<p class='subsubtitle'>-Nuclear Magnetic Resonance-</p>
					</p>
						<img src="ir11.png" id="ir11"></img>
					<p>
				</center>
		</div>
		<?php include "../../includes/dropdown.html"; ?>
	</body>
</html>