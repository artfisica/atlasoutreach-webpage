# Variable Names

If you are using ROOTbrowser to look at the datasets, here are the definitions of the variables.

When there are two leptons present in the final state they are ordered by transverse momentum with the "leading lepton" having the highest transverse momentum and the “trailing lepton" having the next highest value.

Take a look at [ATLAS events](https://www.gitbook.com/book/cheatham1/get-started/edit#/edit/master/atlas_events.md) chapter for discussion of primary vertex and [Glossary](https://www.gitbook.com/book/cheatham1/get-started/edit#/edit/master/GLOSSARY.md) chapter for explanation of ATLAS coordinate system.

|branchname                 | description |
|-|-|-|
|pvxp\_n                    | number of primary vertices |
|leadlep\_E                     | energy of the leading lepton |
|traillep\_pt                    | transverse momentum of the trailing lepton |
|vxp\_z                     | z-position of the primary vertex (see ATLAS coordinate system)|
|leadlep\_type              | number signifying the leading lepton type (e, mu, tau) of the lepton |
|jet\_pt                    | transverse momentum of the jet |
|etmiss                    | Transverse energy of the missing momentum vector |
|leadlep\_ptcone30              | scalar sum of tracks $$p_T$$ in a cone of R=0.3 around leading lepton, not including lepton $$p_T$$ itself |
|traillep\_E                     | energy of the trailing lepton |
|leadlep\_eta                   | pseudorapidity of the leading lepton |
|JetInvMass                   |  invariant mass of the jet|
|jet\_eta| pseudorapidity of the jet |
|traillep\_eta                   | pseudorapidity of the trailing lepton |
|traillep\_phi                   | azimuthal angle of the trailing lepton |
|traillep\_d0     | d0 of the track associated to the trailing lepton at the point of closest approach (p.o.a.) |
|leadlep\_phi                   | azimuthal angle of the leading lepton |
|jet\_MV1                   | Weight from algorithm based on Multi-Variate technique |
|jet\_m                  | reconstructed jet mass |
|leadlep\_charge                | charge of the trailing lepton |
|traillep\_z0                    | z-coordinate of the track associated to the lepton wrt. the primary vertex |
|leadlep\_pt                    | transverse momentum of the leading lepton |
|leadlep\_etcone20              | scalar sum of tracks ET in a cone of R=0.2 around leading lepton, not including lepton ET itself |
|lep\_n                     | number of preselected leptons |
|n\_jets                     | number of selected jets |
|traillep\_etcone20              | scalar sum of tracks ET in a cone of R=0.2 around trailing lepton, not including lepton ET itself |
|jet\_jvf                   | jet vertex fraction of the jet |
|leadlep\_d0    | d0 of the track associated to the leading lepton at the point of closest approach (p.o.a.) |
|traillep\_type                  | number signifying the lepton type (e, mu, tau) of the trailing lepton |
|leadlep\_z0                    | z-coordinate of the track associated to the leading lepton wrt. the primary vertex |
|traillep\_ptcone30             | scalar sum of tracks $$p_T$$ in a cone of R=0.3 around the trailing lepton, not including lepton $$p_T$$ itself |
|traillep\_charge                | charge of the trailing lepton |

