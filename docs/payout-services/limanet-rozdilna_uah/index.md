## General 
**Code:** `limanet-rozdilna_uah`  
**Method:** `limanet-rozdilna`  
**Currency:** `UAH` [show -->]() 
**Amount limits:** from `5`  to `14999`  UAH ## Fields 
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
: [en] Special Rahunka  
: [uk] особового рахунку  
: [ru] Лицевого счета  
Hint:  
: [en] Special Rahunka  
: [uk] особового рахунку  
: [ru] Лицевого счета  
## JSON Object 
```json
 {"code":"limanet-rozdilna_uah","method":"limanet-rozdilna","currency":"UAH","fields":[{"key":"client_id","type":"string","label":{"en":"Special Rahunka","uk":"\u043e\u0441\u043e\u0431\u043e\u0432\u043e\u0433\u043e \u0440\u0430\u0445\u0443\u043d\u043a\u0443","ru":"\u041b\u0438\u0446\u0435\u0432\u043e\u0433\u043e \u0441\u0447\u0435\u0442\u0430"},"regexp":"\/^\\d{1,128}$\/","required":true,"position":1,"hint":{"en":"Special Rahunka","uk":"\u043e\u0441\u043e\u0431\u043e\u0432\u043e\u0433\u043e \u0440\u0430\u0445\u0443\u043d\u043a\u0443","ru":"\u041b\u0438\u0446\u0435\u0432\u043e\u0433\u043e \u0441\u0447\u0435\u0442\u0430"},"example":"7371"}],"amount_min":5,"amount_max":14999}```  
