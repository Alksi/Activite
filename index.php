<!DOCTYPE html>
<html>
	<head>
			<meta charset="utf-8" />
					<title>Blog</title>	
							<link rel="stylesheet" href="style.css" />
								</head>
									
										<body>
											<h1>Mon super blog !</h1>
												<p>Dernier billet du blog:</p>
													<div class="news">
													<?php
														$bdd = new PDO('mysql:host=localhost; dbname=test; charset=utf8', 'root', '');
															$reponse = $bdd->query('select id_b, titre, date(date_creation)as date, time(date_creation) as heure, contenu from billets order by date_creation desc');
																
																	while($donnees = $reponse->fetch()){
																	?>
																			<h3><?php echo htmlspecialchars(htmlspecialchars($donnees['titre'])) . ' Le ' . $donnees['date'] . ' à </i>' .$donnees['heure'];?></h3>
																					<p><?php echo htmlspecialchars(htmlspecialchars($donnees['contenu']));?><br /><i><a href="commentaires.php?id_b=<?php echo $donnees['id_b'];?>">Commentaires</a></i></p>
																					<?php
																						}
																							$reponse->closeCursor();
																							?>
																									</div>
																										</body>
																										</html>

