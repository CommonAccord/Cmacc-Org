Note=This is a place to try out multilingual naming etc.  Obviously, language is a divider as well as uniter. In most commercial documents there will be demand for international equivalents, for comprehension and so that our international dealings dovetail with our local ones.

Note=This also speaks to the issue of linguistic equivalence.  While no translation can be exact (in part because text is never exact), the ICC will give the same meaning to these different formulations.  Which is the way it should be. 

Note=This presents the same texts in three formats -- tabular side-by-side, columns, and sequential (a list).  

Note=For examples of how to automate choice in docs:

ADR.45=<b>45</b>
EXP.1.Xref=<b>Xref??</b>

<b>Automating</b>=Choice of Number of Arbitrators:
EN.ARB.#=<b>Choose: {EN.ARB.#.1} or {EN.ARB.#.2}</b>
FR.ARB.#=<b>Choississez: {FR.ARB.#.1} or {FR.ARB.#.2}</b>
ES.ARB.#=<b>{Spanish for Choose}: {ES.ARB.#.1} or {ES.ARB.#.2}</b>
DE.ARB.#=<b>Wahlen: {DE.ARB.#.1} or {DE.ARB.#.2}</b>



EN.ARB.#.1=one arbitrator appointed
FR.ARB.#.1=un arbitre nommé
ES.ARB.#.1=uno árbitro nombrado
<b>DE.ARB.#</b>=Note that the German construction embeds the reference to the rules.  So far this is merely an artifact and not a problem for compatibility.
DE.ARB.#.1=ein gemäß dieser Ordnung ernannte Schiedsrichter

<b>ARB.#</b>=Number of arbitrators (original text)
EN.ARB.#.2=one or more arbitrators  appointed
FR.ARB.#.2=un ou plusieurs arbitres nommés
ES.ARB.#.2=uno o más árbitros nombrados
DE.ARB.#.2=einem oder mehreren gemäß dieser Ordnung ernannten Schiedsrichtern

EN.ARB.#.3=three arbitrators  appointed
FR.ARB.#.3=trois arbitres nommés
ES.ARB.#.3=tres árbitros nombrados
DE.ARB.#.3=drei gemäß dieser Ordnung ernannten Schiedsrichtern

Model.Root=<b>Table</b>{Table}<b>Columns</b>{Columns}<b>List</b>{List}

Columns=<table rules="rows"><tr><td>{FR.List}</td><td>{EN.List}</td><td>{ES.List}</td><td>{DE.List}</td></tr></table>

Table=<table  rules="rows">{Intro.Row}{ARB.1.Row}{ARB.2.Row}{ADR.1.Row}{EXP.1.Row}</table>

Intro.Row=<tr><td><b>Name</b></td><td>English</td><td>Francais</td><td>Espanol</td><td>Deutsch</td></tr>
ARB.1.Row=<tr><td><b>ARB.1</b></td><td>{EN.ARB.1}</td><td>{FR.ARB.1}</td><td>{ES.ARB.1}</td><td>{DE.ARB.1}</td></tr>
ARB.2.Row=<tr><td><b>ARB.2</b></td><td>{EN.ARB.2}</td><td>{FR.ARB.2}</td><td>{ES.ARB.2}</td><td>{DE.ARB.2}</td></tr>
ADR.1.Row=<tr><td><b>ADR.1</b></td><td>{EN.ADR.1}</td><td>{FR.ADR.1}</td><td>{ES.ADR.1}</td><td>{DE.ADR.1}</td></tr>
EXP.1.Row=<tr><td><b>EXP.1</b></td><td>{EN.EXP.1}</td><td>{FR.EXP.1}</td><td>{ES.EXP.1}</td><td>{DE.EXP.1}</td></tr>


List=:<ol><li>{ES.List}</li><li>{FR.List}</li><li>{EN.List}</li><li>{DE.List}</li></ol>
EN.List=<u>English</u>. <ol><li>{EN.ARB.1}</li><li>{EN.ARB.2}</li><li>{EN.ADR.1}</li><li>{EN.EXP.1}</li></ol> 
EN.ARB.1=All disputes arising out of or in connection with the present contract {EN.ARB.1.1}.
EN.ARB.1.1=shall be finally settled under the Rules of Arbitration of the International Chamber of Commerce by {EN.ARB.#} in accordance with the said Rules
EN.ARB.2={EN.ARB.1}  The Emergency Arbitrator Provisions shall not apply.
EN.ADR.1=In the event of any dispute arising out of or in connection with the present contract, the parties agree to submit the matter to settlement proceedings under the ICC ADR Rules.  If the dispute has not been settled pursuant to the said Rules within {ADR.45} days following the filing of a Request for ADR or within such other period as the parties may agree in writing, such dispute {EN.ARB.1.1}.
EN.EXP.1=In the event of any dispute arising out of or in connection with clause {EXP.1.Xref} of the present contract, the parties agree to submit the matter, in the first instance, to administered expertise proceedings in accordance with the Rules for Expertise of the International Chamber of Commerce. If the dispute has not been resolved through such administered expertise proceedings it shall, after the Centre's notification of the termination of the expertise proceedings, be finally settled under the Rules of Arbitration of the International Chamber of Commerce by {EN.ARB.#.1} in accordance with the said Rules of Arbitration.

FR.List=<u>Français</u>. <ol><li>{FR.ARB.1}</li><li>{FR.ARB.2}</li><li>{FR.ADR.1}</li><li>{FR.EXP.1}</li></ol> 
FR.ARB.1=Tous différends découlant du présent contrat ou en relation avec celui-ci seront tranchés définitivement suivant le Règlement d'arbitrage de la Chambre de commerce internationale par {FR.ARB.#} conformément à ce Règlement. 
FR.ARB.2={FR.ARB.1}  Les Dispositions relatives à l'arbitre d'urgence ne s'appliquent pas.
FR.ADR.1=En cas de différend résultant du présent contrat ou s'y rapportant, les parties conviennent de soumettre ce différend à la procédure de règlement des différends prévue par le Règlement ADR de la CCI. Si le différend n'a pas été réglé dans le cadre dudit Règlement dans un délai de {ADR.45} jours suivant le dépôt de la demande d'ADR ou dans tout autre délai dont les parties peuvent convenir par écrit, le différend sera tranché définitivement suivant le Règlement d'arbitrage de la Chambre de commerce internationale par {FR.ARB.#} conformément à celui-ci.
FR.EXP.1=En cas de différend découlant de la clause {EXP.1.Xref} du présent contrat ou en relation avec celle-ci, les parties conviennent de soumettre ce différend, au préalable, à une procédure d'expertise administrée conformément au Règlement d'expertise de la Chambre de commerce internationale. Si le différend n'a pas été réglé au moyen d'une telle procédure d'expertise administrée, il sera, après notification par le Centre de l'achèvement de la procédure d'expertise, tranché définitivement suivant le Règlement d'arbitrage de la Chambre de commerce internationale par {FR.ARB.#} conformément audit règlement d'arbitrage.

ES.List=<u>Espanol</u>. <ol><li>{ES.ARB.1}</li><li>{ES.ARB.2}</li><li>{ES.ADR.1}</li><li>{ES.EXP.1}</li></ol> 

ES.ARB.1=Todas las desavenencias que deriven del presente contrato o que guarden relación con éste serán resueltas definitivamente de acuerdo con el Reglamento de Arbitraje de la Cámara de Comercio Internacional por {ES.ARB.#} conforme a este Reglamento.

ES.ARB.2={ES.ARB.1}  Las Disposiciones sobre el Árbitro de Emergencia no serán aplicables.
ES.ADR.1=En caso de desavenencias derivadas del presente contrato o relacionadas con él, las partes se comprometen a someterlas al proceso de solución de desavenencias del Reglamento ADR de la CCI. A falta de resolución de las desavenencias según dicho Reglamento dentro de los {ADR.45} días siguientes a la presentación de la demanda de ADR, o al vencimiento de otro plazo que hubiera sido acordado por escrito por las partes, dichas desavenencias serán definitivamente resueltas de acuerdo con el Reglamento de Arbitraje de la Cámara de Comercio Internacional por {ES.ARB.#} conforme a dicho Reglamento de Arbitraje.
ES.EXP.1=En caso de cualquier desavenencia que derive de la cláusula {EXP.1.Xref} del presente contrato o guarde relación con la misma, las partes acuerdan someter el asunto, en primera instancia, al procedimiento de peritaje administrado conforme al Reglamento de Peritaje de la Cámara de Comercio Internacional. Cuando la desavenencia no haya sido resuelta mediante tal procedimiento de peritaje administrado y una vez la finalización del procedimiento de peritaje haya sido notificada por el Centro, dicha desavenencia será resuelta definitivamente de acuerdo con al Reglamento de Arbitraje de la Cámara de Comercio Internacional por {ES.ARB.#} conforme a dicho Reglamento de Arbitraje.

DE.List=<u>Deutsch</u>. <ol><li>{DE.ARB.1}</li><li>{DE.ARB.2}</li><li>{DE.ADR.1}</li><li>{DE.EXP.1}</li></ol> 

DE.ARB.#=einem oder mehreren gemäß dieser Ordnung ernannten Schiedsrichtern
DE.ARB.1=Alle Streitigkeiten, die sich aus oder in Zusammenhang mit dem vorliegenden Vertrag ergeben, werden nach der Schiedsgerichtsordnung der Internationalen Handelskammer (ICC) von {DE.ARB.#} endgültig entschieden.
DE.ARB.2={DE.ARB.1}  Die Bestimmungen zum Eilschiedsrichterverfahren finden keine Anwendung.

DE.ADR.1=Die Parteien vereinbaren, im Falle aller Streitigkeiten, die sich aus oder in Zusammenhang mit dem vorliegenden Vertrag ergeben, ein Streitbeilegungsverfahren nach den ICC-ADR-Regeln durchzuführen. Wird die Streitigkeiten nicht innerhalb einer Frist von {ADR.45} Tagen ab dem Tag des Einreichens des Antrags auf Durchführung eines ICC-ADR-Verfahrens oder innerhalb einer anderen, von den Parteien schriftlich vereinbarten Frist im Einklang mit den ICC-ADR-Regeln beigelegt, wird die Streitigkeit nach der Schiedsgerichtsordnung der Internationalen Handelskammer (ICC) von {DE.ARB.#} endgültig entschieden.

DE.EXP.1=<b>Nicht zu finden zu ICCWBO !</b> 

                
