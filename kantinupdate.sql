/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     07/01/2018 15.12.55                          */
/*==============================================================*/


drop table if exists DETIL_TRANS;

drop table if exists KANTIN;

drop table if exists MENU;

drop table if exists TRANSAKSI;

drop table if exists USER;

/*==============================================================*/
/* Table: DETIL_TRANS                                           */
/*==============================================================*/
create table DETIL_TRANS
(
   ID_DETIL             int not null auto_increment,
   ID_MENU              int,
   ID_TRAN              int not null,
   JUMLAH               int,
   primary key (ID_DETIL)
)
auto_increment = 10000;

/*==============================================================*/
/* Table: KANTIN                                                */
/*==============================================================*/
create table KANTIN
(
   ID_KANTIN            int not null auto_increment,
   ID                   int,
   GAMBAR               blob,
   NAMA_KANTIN          varchar(50),
   primary key (ID_KANTIN)
)
auto_increment = 1000;

/*==============================================================*/
/* Table: MENU                                                  */
/*==============================================================*/
create table MENU
(
   ID_MENU              int not null auto_increment,
   ID_KANTIN            int,
   NAMA_MENU            text,
   HARGA                float(8,2),
   primary key (ID_MENU)
)
auto_increment = 10000;

/*==============================================================*/
/* Table: TRANSAKSI                                             */
/*==============================================================*/
create table TRANSAKSI
(
   ID_TRAN              int not null auto_increment,
   ID                   int not null,
   TOTAL                int,
   TANGGAL              date,
   primary key (ID_TRAN)
)
auto_increment = 10000;

/*==============================================================*/
/* Table: USER                                                  */
/*==============================================================*/
create table USER
(
   ID                   int not null auto_increment,
   USERNAME             varchar(50),
   PASSWORD             varchar(50),
   NAMA                 text,
   LEVEL                enum('siswa','penjual'),
   primary key (ID)
)
auto_increment = 10000;

alter table DETIL_TRANS add constraint FK_MEMILIKI foreign key (ID_TRAN)
      references TRANSAKSI (ID_TRAN) on delete restrict on update restrict;

alter table DETIL_TRANS add constraint FK_TERDIRI foreign key (ID_MENU)
      references MENU (ID_MENU) on delete restrict on update restrict;

alter table KANTIN add constraint FK_MEMBUAT foreign key (ID)
      references USER (ID) on delete restrict on update restrict;

alter table MENU add constraint FK_MEMPUNYAI foreign key (ID_KANTIN)
      references KANTIN (ID_KANTIN) on delete restrict on update restrict;

alter table TRANSAKSI add constraint FK_MENGISI foreign key (ID)
      references USER (ID) on delete restrict on update restrict;

