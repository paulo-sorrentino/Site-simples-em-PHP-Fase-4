create table conteudo (
	id_conteudo int not null primary key auto_increment,
	pagina varchar(50),
	titulo varchar(255),
	conteudo text,
	imagem varchar(255)
);

insert into conteudo
(pagina, titulo, conteudo, imagem)
values
('produtos', 'Bom', 'Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.', 'galaxy.png'),
('produtos', 'Ótimo', 'Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Proin eget elit vel tellus commodo viverra. Quisque in imperdiet purus. Donec urna mauris, facilisis ac dui et, viverra consectetur lorem.','kitkat_yellow.jpg'),
('produtos', 'Excelente','Aenean blandit volutpat dolor eget ornare. Aenean vitae neque ut tellus fringilla varius quis non ligula. Donec vitae tristique tellus. Nulla blandit ultricies tortor non feugiat. Donec sodales ac mauris et vestibulum. Nullam eget commodo velit. Morbi mollis urna sit amet luctus consectetur.','kitkat_blue.jpg'),
('servicos', 'Fringillaauctor','Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.','abstract_wp.png'),
('servicos', 'Vestibulum','Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Proin eget elit vel tellus commodo viverra. Quisque in imperdiet purus. Donec urna mauris, facilisis ac dui et, viverra consectetur lorem.','galaxy.png');
