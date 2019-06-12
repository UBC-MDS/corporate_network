https://misr.sauder.ubc.ca/corporate_network/

Hidden JSON repo structure:

corporate_network/
├── json.agreement/       <- contains all agreement JSON dictionaries with only **agreement** relationships, to the 2nd degree
├── json.full/           <- contains JSON dictionaries with **all relationships**, to the 1st degree
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
│   ├── google_inc.json      <- Data from third party sources.
│   ├── ...
├── json.competition/       <- Data from third party sources.
├── json.legal/       <- Data from third party sources.
├── json.personal/       <- Data from third party sources.
├── json.ownership/       <- Data from third party sources.
├── network.datatable.agreement.json       <- Data from third party sources.
├── network.datatable.full.json       <- Data from third party sources.
├── ...



