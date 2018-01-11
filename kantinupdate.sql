/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     11/01/2018 08.26.06                          */
/*==============================================================*/


drop table if exists KANTIN;

drop table if exists MENU;

drop table if exists TRANSAKSI;

drop table if exists USER;

/*==============================================================*/
/* Table: KANTIN                                                */
/*==============================================================*/
create table KANTIN
(
   ID_KANTIN            int not null,
   ID                   int,
   GAMBAR               blob,
   NAMA_KANTIN          varchar(50),
   primary key (ID_KANTIN)
);

/*==============================================================*/
/* Table: MENU                                                  */
/*==============================================================*/
create table MENU
(
   ID_MENU              int not null,
   ID_KANTIN            int,
   ID_TRAN              int,
   NAMA_MENU            text,
   HARGA                float(8,2),
   primary key (ID_MENU)
);

/*==============================================================*/
/* Table: TRANSAKSI                                             */
/*==============================================================*/
create table TRANSAKSI
(
   ID_TRAN              int not null,
   ID                   int not null,
   TANGGAL              date,
   TOTAL                int,
   JUMLAH               int,
   primary key (ID_TRAN)
);

/*==============================================================*/
/* Table: USER                                                  */
/*==============================================================*/
create table USER
(
   ID                   int not null,
   USERNAME             varchar(50),
   PASSWORD             varchar(50),
   NAMA                 text,
   LEVEL                varchar(30),
   primary key (ID)
);

alter table KANTIN add constraint FK_MEMBUAT foreign key (ID)
      references USER (ID) on delete restrict on update restrict;

alter table MENU add constraint FK_MEMILIKI foreign key (ID_TRAN)
      references TRANSAKSI (ID_TRAN) on delete restrict on update restrict;

alter table MENU add constraint FK_MEMPUNYAI foreign key (ID_KANTIN)
      references KANTIN (ID_KANTIN) on delete restrict on update restrict;

alter table TRANSAKSI add constraint FK_MENGISI foreign key (ID)
      references USER (ID) on delete restrict on update restrict;

