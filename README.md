https://misr.sauder.ubc.ca/corporate_network/

Hidden JSON repo structure:

```
corporate_network/
├── json.agreement/       <- contains all agreement JSON dictionaries, to the 2nd degree
├── json.full/           <- contains JSON dictionaries with all relationships, to the 1st degree
│   ├── filed/          <- contains JSON for trees of FILED 10-K mentions
│   │   ├── 2009/     <- contains JSON for trees for specific year
│   │   │   └── google_inc.json      <- contains JSON for trees for specific year and specific 10K filed by company
│   │   │   └── microsoft_corp.json
│   │   │   └── ...
│   │   ├── ...  
│   │   ├── ...  
│   ├── cited/      <- contains JSON for trees of CITED 10-K mentions
│   │   ├── 2009/
│   │   ├── ...
│   ├── google_inc.json      <- JSON file used to navigate between trees
│   ├── ...
├── json.competition/       <- competition JSON files
├── json.legal/     
├── json.personal/      
├── json.ownership/  
├── network.datatable.agreement.json       <- Datatable for search bar functionality
├── network.datatable.full.json 
├── ...

```


