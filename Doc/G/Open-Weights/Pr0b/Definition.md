Ti=The Definition

Intro.sec=This is a definition of Open Weights models, and the licenses applied to them.

Require.Intro.sec=The following are requirements to meet the Open Weights definition:

Require.1.sec=The model must be provided along with access to the NNWs as necessary to study how the model was trained

Require.2.0.sec=The model must be provided along with information on how the model was trained, including the following:{FtNt.1.Xnum}

Require.2.1.sec=model architecture

Require.2.2.sec=training methodology

Require.2.3.sec=description of the data used to train the model and their provenance

Require.2.4.sec=hyperparameter configurations.

Require.2.=[G/Z/ol-a/s4]

Require.3.sec=The license must allow all recipients to use the models for any purpose.

Require.4.sec=The license must allow all recipients to modify the model for any purpose.

Require.5.sec=The license must not discriminate against any user, industry, or purpose.

Require.6.sec=The software used to train the model must be provided under an open source license, or in the public domain.

Require.7.sec=The license must allow all recipients to provide the model, or modifications of the model, to others.

Require.8.sec=The license must allow any license notices or NNWs to be provided via an online reference.

Note=The following are optional.

Require.9.sec=The data used to train the model may be provided under open data licensing terms.

Require.10.sec=Software provided as a user interface to the model may be provided under a license meeting the Open Source Definition.

Require.11.sec=Software suitable to further train the model may be provided under a license meeting the Open Source Definition.

Require.=[G/Z/ol/s11]

Mandatory.secs=<li>{Require.1.sec}</li><li>{Require.2.sec}</li><li>{Require.3.sec}</li><li>{Require.4.sec}</li><li>{Require.5.sec}</li><li>{Require.6.sec}</li><li>{Require.7.sec}</li><li>{Require.8.sec}

Optional.secs=<li>{Require.9.sec}</li><li>{Require.10.sec}</li><li>{Require.11.sec}</li>


FnNt.Ti=Footnotes

FtNt.1.sec=<a class='xref' href='{!!!}FtNt.1.Xnum'>*</a> This element will be considered sufficient if it meets the requirements of the <a href=i.php?v=s&f=G/EU/Artificial_Intelligence_Act/0.md>EU Artificial Intelligence Act</a>, <a href=i.php?v=d&f=G/EU/Artificial_Intelligence_Act/0.md&k=Annex.IV.Sec>Annex IV</a><a href=i.php?v=d&f=G/EU/Artificial_Intelligence_Act/0.md&k=Annex.IV.2.sec>(2)</a><a href=i.php?v=d&f=G/EU/Artificial_Intelligence_Act/0.md&k=Annex.IV.2.4.sec>(d)</a>, or any similar local legislation that sets forth similar requirements. "where relevant, the data requirements in terms of datasheets describing the training methodologies and techniques and the training data sets used, including information about the provenance of those data sets, their scope and main characteristics; how the data was obtained and selected; labelling procedures (e.g. for supervised learning), data cleaning methodologies (e.g. outliers detection)"

Mandatory.Sec={Sec.Begin}<ol>{Mandatory.secs}</ol>{FtNt.Sec}

All.Sec={Sec.Begin}<ol>{Mandatory.secs}{Optional.secs}</ol>{FtNt.Sec}

Sec.Begin=<span class=sec-ti>{Ti}</span><br>{Intro.sec}<br>{Require.Intro.sec}

Pick.Sec=<span class=warning>Pick either Mandatory.Sec or All.Sec:</span><br>{Sec.Begin}<ol><span class=warning>Mandatory</span><br>{Mandatory.secs}<br><span class=warning>Optional</span><br>{Optional.secs}</ol>{FtNt.Sec}

r00t={Pick.Sec}

Sec={Pick.Sec}


FtNt.Ti=Footnote

FtNt.1.Xnum=<a class='xref' href='{!!!}FtNt.1.sec'>*</a>

FtNt.=[G/Z/para/s1]

!!!=#