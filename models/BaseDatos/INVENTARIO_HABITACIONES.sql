CREATE TABLE "HOTELDAPA"."INVENTARIO_HABITACIONES" 
   (	"INV_HAB_COD" NUMBER(4,0) NOT NULL ENABLE, 
	"INV_HAB_ESTADO" VARCHAR2(20 CHAR), 
	"INV_HAB_DOCREQ" VARCHAR2(3 CHAR), 
	"INV_HAB_TIPO" VARCHAR2(30 CHAR), 
	"INV_HAB_PRECIO" NUMBER(17,2), 
	"INV_HAB_USUREQ" VARCHAR2(10 CHAR), 
	"INV_HAB_DESDE" DATE, 
	"INV_HAB_HASTA" DATE, 
	"INV_HAB_ADULTOS" VARCHAR2(8 CHAR), 
	"INV_HAB_NINOS" VARCHAR2(8 CHAR), 
	"INV_HAB_DIAS" NUMBER(8,0), 
	"INV_HAB_TOTAL" VARCHAR2(8 CHAR), 
	"INV_HAB_DIARES" DATE, 
	 PRIMARY KEY ("INV_HAB_COD")
  USING INDEX PCTFREE 10 INITRANS 2 MAXTRANS 255 COMPUTE STATISTICS 
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1 BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "SYSTEM"  ENABLE
   ) SEGMENT CREATION IMMEDIATE 
  PCTFREE 10 PCTUSED 40 INITRANS 1 MAXTRANS 255 NOCOMPRESS LOGGING
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1 BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "SYSTEM" ;