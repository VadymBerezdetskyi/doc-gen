## General 
**Code:** `aviso-popolnenie-lichnogo-kabineta_uah`  
**Method:** `aviso-popolnenie-lichnogo-kabineta`  
**Currency:** `UAH` [show -->]() 
**Amount limits:** from `10`  to `14999`  UAH ## Fields 
### Overview 
|Key|Required|Type|Regexp| 
|:---:|:---:|:---:|:---:| 
|`client_id` |✔ |`string` |`/^\d{1,128}$/` | 
 
### Details 
0 **`client_id` **  
Type: `string`  
Regexp: `/^\d{1,128}$/`  
Required: `1`  
Label:  
: [en] Rahunka number  
: [uk] Номер рахунка  
: [ru] Номер рахунку  
Hint:  
: [en] Rahunka number  
: [uk] Номер рахунка  
: [ru] Номер рахунку  
## JSON Object 
```json
 {"code":"aviso-popolnenie-lichnogo-kabineta_uah","method":"aviso-popolnenie-lichnogo-kabineta","currency":"UAH","fields":[{"key":"client_id","type":"string","label":{"en":"Rahunka number","uk":"\u041d\u043e\u043c\u0435\u0440 \u0440\u0430\u0445\u0443\u043d\u043a\u0430","ru":"\u041d\u043e\u043c\u0435\u0440 \u0440\u0430\u0445\u0443\u043d\u043a\u0443"},"regexp":"\/^\\d{1,128}$\/","required":true,"position":1,"hint":{"en":"Rahunka number","uk":"\u041d\u043e\u043c\u0435\u0440 \u0440\u0430\u0445\u0443\u043d\u043a\u0430","ru":"\u041d\u043e\u043c\u0435\u0440 \u0440\u0430\u0445\u0443\u043d\u043a\u0443"},"example":"555419"}],"amount_min":10,"amount_max":14999}```  
