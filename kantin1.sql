/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     18/12/2017 14.17.56                          */
/*==============================================================*/


drop table if exists FORM_PESAN;

drop table if exists MELIHAT;

drop table if exists MEMILIKI;

drop table if exists MENU;

drop table if exists PENJUAL;

drop table if exists SISWA;

/*==============================================================*/
/* Table: FORM_PESAN                                            */
/*==============================================================*/
create table FORM_PESAN
(
   ID_PESAN             int not null,
   ID_SISWA             int not null,
   JUMLAH               int,
   WAKTU                time,
   TANGGAL              date,
   primary key (ID_PESAN)
);

/*==============================================================*/
/* Table: MELIHAT                                               */
/*==============================================================*/
create table MELIHAT
(
   ID_SISWA             int not null,
   ID_MENU              int not null,
   primary key (ID_SISWA, ID_MENU)
);

/*==============================================================*/
/* Table: MEMILIKI                                              */
/*==============================================================*/
create table MEMILIKI
(
   ID_MENU              int not null,
   ID_PESAN             int not null,
   primary key (ID_MENU, ID_PESAN)
);

/*==============================================================*/
/* Table: MENU                                                  */
/*==============================================================*/
create table MENU
(
   ID_MENU              int not null,
   ID_PENJUAL           int,
   NAMA_MENU            text,
   GAMBAR               blob,
   DESKRIPSI            text,
   HARGA                float(8,2),
   primary key (ID_MENU)
);

/*==============================================================*/
/* Table: PENJUAL                                               */
/*==============================================================*/
create table PENJUAL
(
   ID_PENJUAL           int not null,
   USER_PENJUAL         text,
   PASS_PENJUAL         text,
   NAMA                 text,
   primary key (ID_PENJUAL)
);

/*==============================================================*/
/* Table: SISWA                                                 */
/*==============================================================*/
create table SISWA
(
   ID_SISWA             int not null,
   USERNAME             text,
   PASSWORD             text,
   NAMA_PEMESAN         text,
   primary key (ID_SISWA)
);

alter table FORM_PESAN add constraint FK_MENGISI foreign key (ID_SISWA)
      references SISWA (ID_SISWA) on delete restrict on update restrict;

alter table MELIHAT add constraint FK_MELIHAT foreign key (ID_SISWA)
      references SISWA (ID_SISWA) on delete restrict on update restrict;

alter table MELIHAT add constraint FK_MELIHAT2 foreign key (ID_MENU)
      references MENU (ID_MENU) on delete restrict on update restrict;

alter table MEMILIKI add constraint FK_MEMILIKI foreign key (ID_MENU)
      references MENU (ID_MENU) on delete restrict on update restrict;

alter table MEMILIKI add constraint FK_MEMILIKI2 foreign key (ID_PESAN)
      references FORM_PESAN (ID_PESAN) on delete restrict on update restrict;

alter table MENU add constraint FK_MENAMBAH foreign key (ID_PENJUAL)
      references PENJUAL (ID_PENJUAL) on delete restrict on update restrict;

