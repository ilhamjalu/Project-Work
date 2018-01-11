/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     11/01/2018 19.16.05                          */
/*==============================================================*/


drop table if exists MENU;

drop table if exists TRANSAKSI;

drop table if exists USER;

/*==============================================================*/
/* Table: MENU                                                  */
/*==============================================================*/
create table MENU
(
   ID_MENU              int not null,
   ID_USER              int,
   ID_TRANS             int,
   NAMA_MENU            text,
   GAMBAR               longblob,
   HARGA                float(8,2),
   primary key (ID_MENU)
);

/*==============================================================*/
/* Table: TRANSAKSI                                             */
/*==============================================================*/
create table TRANSAKSI
(
   ID_TRANS             int not null,
   ID_USER              int,
   JUMLAH               int,
   TOTAL                int,
   DATE                 date,
   primary key (ID_TRANS)
);

/*==============================================================*/
/* Table: USER                                                  */
/*==============================================================*/
create table USER
(
   ID_USER              int not null,
   USERNAME             varchar(20),
   PASSWORD             varchar(20),
   LEVEL                enum('siswa','penjual'),
   NAMA                 varchar(50),
   primary key (ID_USER)
);

alter table MENU add constraint FK_MEMILIKI foreign key (ID_TRANS)
      references TRANSAKSI (ID_TRANS) on delete restrict on update restrict;

alter table MENU add constraint FK_MENGISI foreign key (ID_USER)
      references USER (ID_USER) on delete restrict on update restrict;

alter table TRANSAKSI add constraint FK_MELAKUKAN foreign key (ID_USER)
      references USER (ID_USER) on delete restrict on update restrict;

