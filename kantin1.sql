/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     12/01/2018 06.50.58                          */
/*==============================================================*/


drop table if exists MENU;

drop table if exists TRANSAKSI;

drop table if exists USER;

/*==============================================================*/
/* Table: MENU                                                  */
/*==============================================================*/
create table MENU
(
   ID_MENU              int not null auto_increment,
   ID_USER              int,
   NAMA_MENU            text,
   GAMBAR               longblob,
   HARGA                float(8,2),
   primary key (ID_MENU)
)
auto_increment = 1000;

/*==============================================================*/
/* Table: TRANSAKSI                                             */
/*==============================================================*/
create table TRANSAKSI
(
   ID_TRANS             int not null auto_increment,
   ID_USER              int,
   ID_MENU              int,
   JUMLAH               int,
   TOTAL                int,
   DATE                 date,
   primary key (ID_TRANS)
)
auto_increment = 1000;

/*==============================================================*/
/* Table: USER                                                  */
/*==============================================================*/
create table USER
(
   ID_USER              int not null auto_increment,
   USERNAME             varchar(20),
   PASSWORD             varchar(20),
   LEVEL                enum('siswa','penjual'),
   NAMA                 varchar(50),
   primary key (ID_USER)
)
auto_increment = 1000;

alter table MENU add constraint FK_MENGISI foreign key (ID_USER)
      references USER (ID_USER) on delete restrict on update restrict;

alter table TRANSAKSI add constraint FK_MELAKUKAN foreign key (ID_USER)
      references USER (ID_USER) on delete restrict on update restrict;

alter table TRANSAKSI add constraint FK_MEMILIKI foreign key (ID_MENU)
      references MENU (ID_MENU) on delete restrict on update restrict;

