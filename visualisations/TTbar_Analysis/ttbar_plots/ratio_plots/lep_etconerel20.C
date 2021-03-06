void lep_etconerel20()
{
//=========Macro generated from canvas: lep_etconerel20/title
//=========  (Wed Jul 19 10:23:48 2017) by ROOT version6.08/04
   TCanvas *lep_etconerel20 = new TCanvas("lep_etconerel20", "title",0,0,900,900);
   gStyle->SetOptStat(0);
   lep_etconerel20->SetHighLightColor(2);
   lep_etconerel20->Range(0,0,1,1);
   lep_etconerel20->SetFillColor(0);
   lep_etconerel20->SetBorderMode(0);
   lep_etconerel20->SetBorderSize(2);
   lep_etconerel20->SetTickx(1);
   lep_etconerel20->SetTicky(1);
   lep_etconerel20->SetLeftMargin(0.16);
   lep_etconerel20->SetRightMargin(0.05);
   lep_etconerel20->SetBottomMargin(0.16);
   lep_etconerel20->SetFrameBorderMode(0);
  
// ------------>Primitives in pad: Main
   TPad *Main = new TPad("Main", "Main",0,0.3,1,1);
   Main->Draw();
   Main->cd();
   Main->Range(-0.2012658,-17.25078,0.4316456,3432.906);
   Main->SetFillColor(0);
   Main->SetBorderMode(0);
   Main->SetBorderSize(2);
   Main->SetTickx(1);
   Main->SetTicky(1);
   Main->SetLeftMargin(0.16);
   Main->SetRightMargin(0.05);
   Main->SetBottomMargin(0.005);
   Main->SetFrameBorderMode(0);
   Main->SetFrameBorderMode(0);
   
   THStack * = new THStack();
   ->SetName("");
   ->SetTitle("Lepton Relative Transverse Energy Isolation");
   
   TH1F *_stack_10 = new TH1F("_stack_10","Lepton Relative Transverse Energy Isolation",40,-0.1,0.4);
   _stack_10->SetMinimum(0);
   _stack_10->SetMaximum(3087.89);
   _stack_10->SetDirectory(0);
   _stack_10->SetStats(0);
   _stack_10->SetMarkerStyle(20);
   _stack_10->GetXaxis()->SetTitle(" etconerel20^{lep}");
   _stack_10->GetXaxis()->SetLabelFont(43);
   _stack_10->GetXaxis()->SetLabelSize(25);
   _stack_10->GetXaxis()->SetTitleSize(25);
   _stack_10->GetXaxis()->SetTitleOffset(2);
   _stack_10->GetXaxis()->SetTitleFont(43);
   _stack_10->GetYaxis()->SetTitle(" Leptons");
   _stack_10->GetYaxis()->SetLabelFont(43);
   _stack_10->GetYaxis()->SetLabelSize(25);
   _stack_10->GetYaxis()->SetTitleSize(25);
   _stack_10->GetYaxis()->SetTitleOffset(2);
   _stack_10->GetYaxis()->SetTitleFont(43);
   _stack_10->GetZaxis()->SetLabelFont(43);
   _stack_10->GetZaxis()->SetLabelSize(25);
   _stack_10->GetZaxis()->SetTitleSize(25);
   _stack_10->GetZaxis()->SetTitleFont(43);
   ->SetHistogram(_stack_10);
   
   
   TH1D *lep_etconerel20__73 = new TH1D("lep_etconerel20__73","Lepton Relative Transverse Energy Isolation",40,-0.1,0.4);
   lep_etconerel20__73->SetBinContent(5,0.01176482);
   lep_etconerel20__73->SetBinContent(6,0.0262714);
   lep_etconerel20__73->SetBinContent(7,0.07309866);
   lep_etconerel20__73->SetBinContent(8,0.2536286);
   lep_etconerel20__73->SetBinContent(9,1.35382);
   lep_etconerel20__73->SetBinContent(10,0.8488185);
   lep_etconerel20__73->SetBinContent(11,0.5901635);
   lep_etconerel20__73->SetBinContent(12,0.3864034);
   lep_etconerel20__73->SetBinContent(13,0.2386006);
   lep_etconerel20__73->SetBinContent(14,0.1488241);
   lep_etconerel20__73->SetBinContent(15,0.07900823);
   lep_etconerel20__73->SetBinContent(16,0.06378902);
   lep_etconerel20__73->SetBinContent(17,0.01237184);
   lep_etconerel20__73->SetBinContent(18,0.008539406);
   lep_etconerel20__73->SetBinContent(19,0.01194041);
   lep_etconerel20__73->SetBinContent(20,0.03269408);
   lep_etconerel20__73->SetBinError(5,0.009333849);
   lep_etconerel20__73->SetBinError(6,0.0262714);
   lep_etconerel20__73->SetBinError(7,0.04589992);
   lep_etconerel20__73->SetBinError(8,0.07252153);
   lep_etconerel20__73->SetBinError(9,0.1568785);
   lep_etconerel20__73->SetBinError(10,0.1273841);
   lep_etconerel20__73->SetBinError(11,0.09513465);
   lep_etconerel20__73->SetBinError(12,0.07256041);
   lep_etconerel20__73->SetBinError(13,0.07088749);
   lep_etconerel20__73->SetBinError(14,0.06725427);
   lep_etconerel20__73->SetBinError(15,0.04591555);
   lep_etconerel20__73->SetBinError(16,0.02715939);
   lep_etconerel20__73->SetBinError(17,0.006395421);
   lep_etconerel20__73->SetBinError(18,0.008010334);
   lep_etconerel20__73->SetBinError(19,0.01194041);
   lep_etconerel20__73->SetBinError(20,0.02323882);
   lep_etconerel20__73->SetEntries(436);
   lep_etconerel20__73->SetDirectory(0);
   lep_etconerel20__73->SetStats(0);

   Int_t ci;      // for color index setting
   TColor *color; // for color definition with alpha
   ci = TColor::GetColor("#fa7921");
   lep_etconerel20__73->SetFillColor(ci);
   lep_etconerel20__73->SetMarkerStyle(20);
   lep_etconerel20__73->GetXaxis()->SetTitle(" etconerel20^{lep}");
   lep_etconerel20__73->GetXaxis()->SetLabelFont(43);
   lep_etconerel20__73->GetXaxis()->SetLabelSize(25);
   lep_etconerel20__73->GetXaxis()->SetTitleSize(25);
   lep_etconerel20__73->GetXaxis()->SetTitleOffset(2);
   lep_etconerel20__73->GetXaxis()->SetTitleFont(43);
   lep_etconerel20__73->GetYaxis()->SetTitle(" Leptons");
   lep_etconerel20__73->GetYaxis()->SetLabelFont(43);
   lep_etconerel20__73->GetYaxis()->SetLabelSize(25);
   lep_etconerel20__73->GetYaxis()->SetTitleSize(25);
   lep_etconerel20__73->GetYaxis()->SetTitleOffset(2);
   lep_etconerel20__73->GetYaxis()->SetTitleFont(43);
   lep_etconerel20__73->GetZaxis()->SetLabelFont(43);
   lep_etconerel20__73->GetZaxis()->SetLabelSize(25);
   lep_etconerel20__73->GetZaxis()->SetTitleSize(25);
   lep_etconerel20__73->GetZaxis()->SetTitleFont(43);
   ->Add(lep_etconerel20,"");
   
   TH1D *lep_etconerel20__74 = new TH1D("lep_etconerel20__74","Lepton Relative Transverse Energy Isolation",40,-0.1,0.4);
   lep_etconerel20__74->SetBinContent(4,0.01513201);
   lep_etconerel20__74->SetBinContent(5,0.0356409);
   lep_etconerel20__74->SetBinContent(6,0.002602487);
   lep_etconerel20__74->SetBinContent(7,0.06197412);
   lep_etconerel20__74->SetBinContent(8,0.2615833);
   lep_etconerel20__74->SetBinContent(9,1.798088);
   lep_etconerel20__74->SetBinContent(10,0.8930226);
   lep_etconerel20__74->SetBinContent(11,0.8097356);
   lep_etconerel20__74->SetBinContent(12,0.4260782);
   lep_etconerel20__74->SetBinContent(13,0.2783595);
   lep_etconerel20__74->SetBinContent(14,0.112424);
   lep_etconerel20__74->SetBinContent(15,0.06344906);
   lep_etconerel20__74->SetBinContent(16,0.09659027);
   lep_etconerel20__74->SetBinContent(17,0.03958309);
   lep_etconerel20__74->SetBinContent(18,0.03283427);
   lep_etconerel20__74->SetBinContent(19,0.0279307);
   lep_etconerel20__74->SetBinError(4,0.01513201);
   lep_etconerel20__74->SetBinError(5,0.0356409);
   lep_etconerel20__74->SetBinError(6,0.002342526);
   lep_etconerel20__74->SetBinError(7,0.04138123);
   lep_etconerel20__74->SetBinError(8,0.08792021);
   lep_etconerel20__74->SetBinError(9,0.2403102);
   lep_etconerel20__74->SetBinError(10,0.1670575);
   lep_etconerel20__74->SetBinError(11,0.1577088);
   lep_etconerel20__74->SetBinError(12,0.1201247);
   lep_etconerel20__74->SetBinError(13,0.09656022);
   lep_etconerel20__74->SetBinError(14,0.05908446);
   lep_etconerel20__74->SetBinError(15,0.04340878);
   lep_etconerel20__74->SetBinError(16,0.05654671);
   lep_etconerel20__74->SetBinError(17,0.02848954);
   lep_etconerel20__74->SetBinError(18,0.02080452);
   lep_etconerel20__74->SetBinError(19,0.0279307);
   lep_etconerel20__74->SetEntries(269);
   lep_etconerel20__74->SetDirectory(0);
   lep_etconerel20__74->SetStats(0);

   ci = TColor::GetColor("#5bc0eb");
   lep_etconerel20__74->SetFillColor(ci);
   lep_etconerel20__74->SetMarkerStyle(20);
   lep_etconerel20__74->GetXaxis()->SetTitle(" etconerel20^{lep}");
   lep_etconerel20__74->GetXaxis()->SetLabelFont(43);
   lep_etconerel20__74->GetXaxis()->SetLabelSize(25);
   lep_etconerel20__74->GetXaxis()->SetTitleSize(25);
   lep_etconerel20__74->GetXaxis()->SetTitleOffset(2);
   lep_etconerel20__74->GetXaxis()->SetTitleFont(43);
   lep_etconerel20__74->GetYaxis()->SetTitle(" Leptons");
   lep_etconerel20__74->GetYaxis()->SetLabelFont(43);
   lep_etconerel20__74->GetYaxis()->SetLabelSize(25);
   lep_etconerel20__74->GetYaxis()->SetTitleSize(25);
   lep_etconerel20__74->GetYaxis()->SetTitleOffset(2);
   lep_etconerel20__74->GetYaxis()->SetTitleFont(43);
   lep_etconerel20__74->GetZaxis()->SetLabelFont(43);
   lep_etconerel20__74->GetZaxis()->SetLabelSize(25);
   lep_etconerel20__74->GetZaxis()->SetTitleSize(25);
   lep_etconerel20__74->GetZaxis()->SetTitleFont(43);
   ->Add(lep_etconerel20,"");
   
   TH1D *lep_etconerel20__75 = new TH1D("lep_etconerel20__75","Lepton Relative Transverse Energy Isolation",40,-0.1,0.4);
   lep_etconerel20__75->SetBinContent(0,0.1416358);
   lep_etconerel20__75->SetBinContent(3,0.1160905);
   lep_etconerel20__75->SetBinContent(4,0.08130827);
   lep_etconerel20__75->SetBinContent(5,0.2411339);
   lep_etconerel20__75->SetBinContent(6,1.10208);
   lep_etconerel20__75->SetBinContent(7,2.704792);
   lep_etconerel20__75->SetBinContent(8,17.21094);
   lep_etconerel20__75->SetBinContent(9,98.31405);
   lep_etconerel20__75->SetBinContent(10,41.20716);
   lep_etconerel20__75->SetBinContent(11,31.62866);
   lep_etconerel20__75->SetBinContent(12,21.2969);
   lep_etconerel20__75->SetBinContent(13,14.14638);
   lep_etconerel20__75->SetBinContent(14,9.658257);
   lep_etconerel20__75->SetBinContent(15,6.048462);
   lep_etconerel20__75->SetBinContent(16,2.640088);
   lep_etconerel20__75->SetBinContent(17,2.38049);
   lep_etconerel20__75->SetBinContent(18,1.802407);
   lep_etconerel20__75->SetBinContent(19,1.163766);
   lep_etconerel20__75->SetBinContent(20,0.7747713);
   lep_etconerel20__75->SetBinError(0,0.1001525);
   lep_etconerel20__75->SetBinError(3,0.09407726);
   lep_etconerel20__75->SetBinError(4,0.08130827);
   lep_etconerel20__75->SetBinError(5,0.1240064);
   lep_etconerel20__75->SetBinError(6,0.2734195);
   lep_etconerel20__75->SetBinError(7,0.4388775);
   lep_etconerel20__75->SetBinError(8,1.195362);
   lep_etconerel20__75->SetBinError(9,2.956128);
   lep_etconerel20__75->SetBinError(10,1.843695);
   lep_etconerel20__75->SetBinError(11,1.565498);
   lep_etconerel20__75->SetBinError(12,1.25398);
   lep_etconerel20__75->SetBinError(13,1.011801);
   lep_etconerel20__75->SetBinError(14,0.8392743);
   lep_etconerel20__75->SetBinError(15,0.6886937);
   lep_etconerel20__75->SetBinError(16,0.4159646);
   lep_etconerel20__75->SetBinError(17,0.3912428);
   lep_etconerel20__75->SetBinError(18,0.3913533);
   lep_etconerel20__75->SetBinError(19,0.2741556);
   lep_etconerel20__75->SetBinError(20,0.2411646);
   lep_etconerel20__75->SetEntries(4245);
   lep_etconerel20__75->SetDirectory(0);
   lep_etconerel20__75->SetStats(0);

   ci = TColor::GetColor("#e55934");
   lep_etconerel20__75->SetFillColor(ci);
   lep_etconerel20__75->SetMarkerStyle(20);
   lep_etconerel20__75->GetXaxis()->SetTitle(" etconerel20^{lep}");
   lep_etconerel20__75->GetXaxis()->SetLabelFont(43);
   lep_etconerel20__75->GetXaxis()->SetLabelSize(25);
   lep_etconerel20__75->GetXaxis()->SetTitleSize(25);
   lep_etconerel20__75->GetXaxis()->SetTitleOffset(2);
   lep_etconerel20__75->GetXaxis()->SetTitleFont(43);
   lep_etconerel20__75->GetYaxis()->SetTitle(" Leptons");
   lep_etconerel20__75->GetYaxis()->SetLabelFont(43);
   lep_etconerel20__75->GetYaxis()->SetLabelSize(25);
   lep_etconerel20__75->GetYaxis()->SetTitleSize(25);
   lep_etconerel20__75->GetYaxis()->SetTitleOffset(2);
   lep_etconerel20__75->GetYaxis()->SetTitleFont(43);
   lep_etconerel20__75->GetZaxis()->SetLabelFont(43);
   lep_etconerel20__75->GetZaxis()->SetLabelSize(25);
   lep_etconerel20__75->GetZaxis()->SetTitleSize(25);
   lep_etconerel20__75->GetZaxis()->SetTitleFont(43);
   ->Add(lep_etconerel20,"");
   
   TH1D *lep_etconerel20__76 = new TH1D("lep_etconerel20__76","Lepton Relative Transverse Energy Isolation",40,-0.1,0.4);
   lep_etconerel20__76->SetBinContent(3,0.05019907);
   lep_etconerel20__76->SetBinContent(6,0.09586934);
   lep_etconerel20__76->SetBinContent(7,0.1662207);
   lep_etconerel20__76->SetBinContent(8,3.113718);
   lep_etconerel20__76->SetBinContent(9,16.26665);
   lep_etconerel20__76->SetBinContent(10,7.924655);
   lep_etconerel20__76->SetBinContent(11,5.882499);
   lep_etconerel20__76->SetBinContent(12,4.710147);
   lep_etconerel20__76->SetBinContent(13,2.935836);
   lep_etconerel20__76->SetBinContent(14,1.483713);
   lep_etconerel20__76->SetBinContent(15,0.8903265);
   lep_etconerel20__76->SetBinContent(16,0.3829783);
   lep_etconerel20__76->SetBinContent(17,0.680491);
   lep_etconerel20__76->SetBinContent(18,0.2489912);
   lep_etconerel20__76->SetBinContent(19,0.3878154);
   lep_etconerel20__76->SetBinContent(20,0.1711251);
   lep_etconerel20__76->SetBinError(3,0.05019907);
   lep_etconerel20__76->SetBinError(6,0.07357479);
   lep_etconerel20__76->SetBinError(7,0.08296076);
   lep_etconerel20__76->SetBinError(8,0.3963998);
   lep_etconerel20__76->SetBinError(9,0.9319612);
   lep_etconerel20__76->SetBinError(10,0.63162);
   lep_etconerel20__76->SetBinError(11,0.5243773);
   lep_etconerel20__76->SetBinError(12,0.4800414);
   lep_etconerel20__76->SetBinError(13,0.3804522);
   lep_etconerel20__76->SetBinError(14,0.2590101);
   lep_etconerel20__76->SetBinError(15,0.2100763);
   lep_etconerel20__76->SetBinError(16,0.1245246);
   lep_etconerel20__76->SetBinError(17,0.2024367);
   lep_etconerel20__76->SetBinError(18,0.1107746);
   lep_etconerel20__76->SetBinError(19,0.12957);
   lep_etconerel20__76->SetBinError(20,0.08888468);
   lep_etconerel20__76->SetEntries(1146);
   lep_etconerel20__76->SetDirectory(0);
   lep_etconerel20__76->SetStats(0);

   ci = TColor::GetColor("#086788");
   lep_etconerel20__76->SetFillColor(ci);
   lep_etconerel20__76->SetMarkerStyle(20);
   lep_etconerel20__76->GetXaxis()->SetTitle(" etconerel20^{lep}");
   lep_etconerel20__76->GetXaxis()->SetLabelFont(43);
   lep_etconerel20__76->GetXaxis()->SetLabelSize(25);
   lep_etconerel20__76->GetXaxis()->SetTitleSize(25);
   lep_etconerel20__76->GetXaxis()->SetTitleOffset(2);
   lep_etconerel20__76->GetXaxis()->SetTitleFont(43);
   lep_etconerel20__76->GetYaxis()->SetTitle(" Leptons");
   lep_etconerel20__76->GetYaxis()->SetLabelFont(43);
   lep_etconerel20__76->GetYaxis()->SetLabelSize(25);
   lep_etconerel20__76->GetYaxis()->SetTitleSize(25);
   lep_etconerel20__76->GetYaxis()->SetTitleOffset(2);
   lep_etconerel20__76->GetYaxis()->SetTitleFont(43);
   lep_etconerel20__76->GetZaxis()->SetLabelFont(43);
   lep_etconerel20__76->GetZaxis()->SetLabelSize(25);
   lep_etconerel20__76->GetZaxis()->SetTitleSize(25);
   lep_etconerel20__76->GetZaxis()->SetTitleFont(43);
   ->Add(lep_etconerel20,"");
   
   TH1D *lep_etconerel20__77 = new TH1D("lep_etconerel20__77","Lepton Relative Transverse Energy Isolation",40,-0.1,0.4);
   lep_etconerel20__77->SetBinContent(1,0.0882813);
   lep_etconerel20__77->SetBinContent(2,0.005024891);
   lep_etconerel20__77->SetBinContent(3,0.1272455);
   lep_etconerel20__77->SetBinContent(4,0.4789313);
   lep_etconerel20__77->SetBinContent(5,0.5137105);
   lep_etconerel20__77->SetBinContent(6,1.665814);
   lep_etconerel20__77->SetBinContent(7,4.311558);
   lep_etconerel20__77->SetBinContent(8,21.49357);
   lep_etconerel20__77->SetBinContent(9,120.1601);
   lep_etconerel20__77->SetBinContent(10,59.27192);
   lep_etconerel20__77->SetBinContent(11,35.52216);
   lep_etconerel20__77->SetBinContent(12,24.70657);
   lep_etconerel20__77->SetBinContent(13,15.3198);
   lep_etconerel20__77->SetBinContent(14,8.375041);
   lep_etconerel20__77->SetBinContent(15,5.830674);
   lep_etconerel20__77->SetBinContent(16,3.984006);
   lep_etconerel20__77->SetBinContent(17,2.022224);
   lep_etconerel20__77->SetBinContent(18,2.232335);
   lep_etconerel20__77->SetBinContent(19,1.110128);
   lep_etconerel20__77->SetBinContent(20,0.5900548);
   lep_etconerel20__77->SetBinError(1,0.06323757);
   lep_etconerel20__77->SetBinError(2,0.004875434);
   lep_etconerel20__77->SetBinError(3,0.07203945);
   lep_etconerel20__77->SetBinError(4,0.151647);
   lep_etconerel20__77->SetBinError(5,0.1505509);
   lep_etconerel20__77->SetBinError(6,0.2738303);
   lep_etconerel20__77->SetBinError(7,0.4686855);
   lep_etconerel20__77->SetBinError(8,1.102878);
   lep_etconerel20__77->SetBinError(9,2.608283);
   lep_etconerel20__77->SetBinError(10,1.799658);
   lep_etconerel20__77->SetBinError(11,1.373757);
   lep_etconerel20__77->SetBinError(12,1.166501);
   lep_etconerel20__77->SetBinError(13,0.895824);
   lep_etconerel20__77->SetBinError(14,0.6787088);
   lep_etconerel20__77->SetBinError(15,0.5643124);
   lep_etconerel20__77->SetBinError(16,0.4568874);
   lep_etconerel20__77->SetBinError(17,0.3205091);
   lep_etconerel20__77->SetBinError(18,0.3312137);
   lep_etconerel20__77->SetBinError(19,0.2252415);
   lep_etconerel20__77->SetBinError(20,0.1990494);
   lep_etconerel20__77->SetEntries(10482);
   lep_etconerel20__77->SetDirectory(0);
   lep_etconerel20__77->SetStats(0);

   ci = TColor::GetColor("#fde74c");
   lep_etconerel20__77->SetFillColor(ci);
   lep_etconerel20__77->SetMarkerStyle(20);
   lep_etconerel20__77->GetXaxis()->SetTitle(" etconerel20^{lep}");
   lep_etconerel20__77->GetXaxis()->SetLabelFont(43);
   lep_etconerel20__77->GetXaxis()->SetLabelSize(25);
   lep_etconerel20__77->GetXaxis()->SetTitleSize(25);
   lep_etconerel20__77->GetXaxis()->SetTitleOffset(2);
   lep_etconerel20__77->GetXaxis()->SetTitleFont(43);
   lep_etconerel20__77->GetYaxis()->SetTitle(" Leptons");
   lep_etconerel20__77->GetYaxis()->SetLabelFont(43);
   lep_etconerel20__77->GetYaxis()->SetLabelSize(25);
   lep_etconerel20__77->GetYaxis()->SetTitleSize(25);
   lep_etconerel20__77->GetYaxis()->SetTitleOffset(2);
   lep_etconerel20__77->GetYaxis()->SetTitleFont(43);
   lep_etconerel20__77->GetZaxis()->SetLabelFont(43);
   lep_etconerel20__77->GetZaxis()->SetLabelSize(25);
   lep_etconerel20__77->GetZaxis()->SetTitleSize(25);
   lep_etconerel20__77->GetZaxis()->SetTitleFont(43);
   ->Add(lep_etconerel20,"");
   
   TH1D *lep_etconerel20__78 = new TH1D("lep_etconerel20__78","Lepton Relative Transverse Energy Isolation",40,-0.1,0.4);
   lep_etconerel20__78->SetBinContent(0,0.4654202);
   lep_etconerel20__78->SetBinContent(1,0.5781489);
   lep_etconerel20__78->SetBinContent(2,1.531532);
   lep_etconerel20__78->SetBinContent(3,3.394447);
   lep_etconerel20__78->SetBinContent(4,6.584417);
   lep_etconerel20__78->SetBinContent(5,15.29183);
   lep_etconerel20__78->SetBinContent(6,33.36656);
   lep_etconerel20__78->SetBinContent(7,88.99111);
   lep_etconerel20__78->SetBinContent(8,472.6961);
   lep_etconerel20__78->SetBinContent(9,2435.605);
   lep_etconerel20__78->SetBinContent(10,1220.159);
   lep_etconerel20__78->SetBinContent(11,834.2657);
   lep_etconerel20__78->SetBinContent(12,547.1953);
   lep_etconerel20__78->SetBinContent(13,349.1787);
   lep_etconerel20__78->SetBinContent(14,223.2934);
   lep_etconerel20__78->SetBinContent(15,139.1863);
   lep_etconerel20__78->SetBinContent(16,88.40559);
   lep_etconerel20__78->SetBinContent(17,60.9576);
   lep_etconerel20__78->SetBinContent(18,37.36127);
   lep_etconerel20__78->SetBinContent(19,27.33358);
   lep_etconerel20__78->SetBinContent(20,19.4147);
   lep_etconerel20__78->SetBinError(0,0.149694);
   lep_etconerel20__78->SetBinError(1,0.1647794);
   lep_etconerel20__78->SetBinError(2,0.2727947);
   lep_etconerel20__78->SetBinError(3,0.39882);
   lep_etconerel20__78->SetBinError(4,0.6077068);
   lep_etconerel20__78->SetBinError(5,0.9209407);
   lep_etconerel20__78->SetBinError(6,1.346031);
   lep_etconerel20__78->SetBinError(7,2.269413);
   lep_etconerel20__78->SetBinError(8,5.387143);
   lep_etconerel20__78->SetBinError(9,12.45415);
   lep_etconerel20__78->SetBinError(10,8.577379);
   lep_etconerel20__78->SetBinError(11,7.118384);
   lep_etconerel20__78->SetBinError(12,5.757611);
   lep_etconerel20__78->SetBinError(13,4.590593);
   lep_etconerel20__78->SetBinError(14,3.664538);
   lep_etconerel20__78->SetBinError(15,2.88816);
   lep_etconerel20__78->SetBinError(16,2.297465);
   lep_etconerel20__78->SetBinError(17,1.904583);
   lep_etconerel20__78->SetBinError(18,1.481464);
   lep_etconerel20__78->SetBinError(19,1.266845);
   lep_etconerel20__78->SetBinError(20,1.048621);
   lep_etconerel20__78->SetEntries(176187);
   lep_etconerel20__78->SetDirectory(0);
   lep_etconerel20__78->SetStats(0);

   ci = TColor::GetColor("#9bc53d");
   lep_etconerel20__78->SetFillColor(ci);
   lep_etconerel20__78->SetMarkerStyle(20);
   lep_etconerel20__78->GetXaxis()->SetTitle(" etconerel20^{lep}");
   lep_etconerel20__78->GetXaxis()->SetLabelFont(43);
   lep_etconerel20__78->GetXaxis()->SetLabelSize(25);
   lep_etconerel20__78->GetXaxis()->SetTitleSize(25);
   lep_etconerel20__78->GetXaxis()->SetTitleOffset(2);
   lep_etconerel20__78->GetXaxis()->SetTitleFont(43);
   lep_etconerel20__78->GetYaxis()->SetTitle(" Leptons");
   lep_etconerel20__78->GetYaxis()->SetLabelFont(43);
   lep_etconerel20__78->GetYaxis()->SetLabelSize(25);
   lep_etconerel20__78->GetYaxis()->SetTitleSize(25);
   lep_etconerel20__78->GetYaxis()->SetTitleOffset(2);
   lep_etconerel20__78->GetYaxis()->SetTitleFont(43);
   lep_etconerel20__78->GetZaxis()->SetLabelFont(43);
   lep_etconerel20__78->GetZaxis()->SetLabelSize(25);
   lep_etconerel20__78->GetZaxis()->SetTitleSize(25);
   lep_etconerel20__78->GetZaxis()->SetTitleFont(43);
   ->Add(lep_etconerel20,"");
   ->Draw("hist");
   
   TPaveText *pt = new TPaveText(0.1830804,0.9149542,0.8169196,0.97,"blNDC");
   pt->SetName("title");
   pt->SetBorderSize(0);
   pt->SetFillStyle(0);
   TText *AText = pt->AddText("Lepton Relative Transverse Energy Isolation");
   pt->Draw();
   
   TH1D *lep_etconerel20__79 = new TH1D("lep_etconerel20__79","Lepton Relative Transverse Energy Isolation",40,-0.1,0.4);
   lep_etconerel20__79->SetBinContent(0,1);
   lep_etconerel20__79->SetBinContent(2,2);
   lep_etconerel20__79->SetBinContent(3,4);
   lep_etconerel20__79->SetBinContent(4,8);
   lep_etconerel20__79->SetBinContent(5,6);
   lep_etconerel20__79->SetBinContent(6,24);
   lep_etconerel20__79->SetBinContent(7,76);
   lep_etconerel20__79->SetBinContent(8,498);
   lep_etconerel20__79->SetBinContent(9,2549);
   lep_etconerel20__79->SetBinContent(10,1133);
   lep_etconerel20__79->SetBinContent(11,802);
   lep_etconerel20__79->SetBinContent(12,599);
   lep_etconerel20__79->SetBinContent(13,410);
   lep_etconerel20__79->SetBinContent(14,262);
   lep_etconerel20__79->SetBinContent(15,199);
   lep_etconerel20__79->SetBinContent(16,119);
   lep_etconerel20__79->SetBinContent(17,74);
   lep_etconerel20__79->SetBinContent(18,51);
   lep_etconerel20__79->SetBinContent(19,39);
   lep_etconerel20__79->SetBinContent(20,23);
   lep_etconerel20__79->SetEntries(6879);
   lep_etconerel20__79->SetDirectory(0);
   lep_etconerel20__79->SetStats(0);
   lep_etconerel20__79->SetMarkerStyle(20);
   lep_etconerel20__79->GetXaxis()->SetLabelFont(43);
   lep_etconerel20__79->GetXaxis()->SetLabelSize(25);
   lep_etconerel20__79->GetXaxis()->SetTitleSize(25);
   lep_etconerel20__79->GetXaxis()->SetTitleOffset(2);
   lep_etconerel20__79->GetXaxis()->SetTitleFont(43);
   lep_etconerel20__79->GetYaxis()->SetTitle(" Leptons");
   lep_etconerel20__79->GetYaxis()->SetLabelFont(43);
   lep_etconerel20__79->GetYaxis()->SetLabelSize(25);
   lep_etconerel20__79->GetYaxis()->SetTitleSize(25);
   lep_etconerel20__79->GetYaxis()->SetTitleOffset(2);
   lep_etconerel20__79->GetYaxis()->SetTitleFont(43);
   lep_etconerel20__79->GetZaxis()->SetLabelFont(43);
   lep_etconerel20__79->GetZaxis()->SetLabelSize(25);
   lep_etconerel20__79->GetZaxis()->SetTitleSize(25);
   lep_etconerel20__79->GetZaxis()->SetTitleFont(43);
   lep_etconerel20__79->Draw("Esame");
   Main->Modified();
   lep_etconerel20->cd();
  
// ------------>Primitives in pad: Data/MC
   TPad *Data/MC = new TPad("Data/MC", "Data/MC",0,0,1,0.3);
   Data/MC->Draw();
   Data/MC->cd();
   Data/MC->Range(0,0,1,1);
   Data/MC->SetFillColor(0);
   Data/MC->SetBorderMode(0);
   Data/MC->SetBorderSize(2);
   Data/MC->SetTickx(1);
   Data/MC->SetTicky(1);
   Data/MC->SetLeftMargin(0.16);
   Data/MC->SetRightMargin(0.05);
   Data/MC->SetTopMargin(0.005);
   Data/MC->SetBottomMargin(0.3333333);
   Data/MC->SetFrameBorderMode(0);
   
   TH1D *lep_etconerel20__80 = new TH1D("lep_etconerel20__80","",40,-0.1,0.4);
   lep_etconerel20__80->SetBinContent(0,1.647294);
   lep_etconerel20__80->SetBinContent(2,1.301611);
   lep_etconerel20__80->SetBinContent(3,1.084604);
   lep_etconerel20__80->SetBinContent(4,1.117351);
   lep_etconerel20__80->SetBinContent(5,0.3728079);
   lep_etconerel20__80->SetBinContent(6,0.661901);
   lep_etconerel20__80->SetBinContent(7,0.7891287);
   lep_etconerel20__80->SetBinContent(8,0.9669349);
   lep_etconerel20__80->SetBinContent(9,0.9534326);
   lep_etconerel20__80->SetBinContent(10,0.8516848);
   lep_etconerel20__80->SetBinContent(11,0.8825806);
   lep_etconerel20__80->SetBinContent(12,1.000465);
   lep_etconerel20__80->SetBinContent(13,1.073024);
   lep_etconerel20__80->SetBinContent(14,1.077871);
   lep_etconerel20__80->SetBinContent(15,1.308365);
   lep_etconerel20__80->SetBinContent(16,1.245121);
   lep_etconerel20__80->SetBinContent(17,1.119639);
   lep_etconerel20__80->SetBinContent(18,1.223421);
   lep_etconerel20__80->SetBinContent(19,1.298478);
   lep_etconerel20__80->SetBinContent(20,1.096107);
   lep_etconerel20__80->SetBinError(0,1.718267);
   lep_etconerel20__80->SetBinError(2,0.9489534);
   lep_etconerel20__80->SetBinError(3,0.55613);
   lep_etconerel20__80->SetBinError(4,0.4071612);
   lep_etconerel20__80->SetBinError(5,0.1537547);
   lep_etconerel20__80->SetBinError(6,0.1375151);
   lep_etconerel20__80->SetBinError(7,0.092563);
   lep_etconerel20__80->SetBinError(8,0.04460552);
   lep_etconerel20__80->SetBinError(9,0.01945373);
   lep_etconerel20__80->SetBinError(10,0.02594756);
   lep_etconerel20__80->SetBinError(11,0.03199127);
   lep_etconerel20__80->SetBinError(12,0.04210054);
   lep_etconerel20__80->SetBinError(13,0.05468175);
   lep_etconerel20__80->SetBinError(14,0.0687228);
   lep_etconerel20__80->SetBinError(15,0.09634089);
   lep_etconerel20__80->SetBinError(16,0.1182875);
   lep_etconerel20__80->SetBinError(17,0.1344129);
   lep_etconerel20__80->SetBinError(18,0.1774148);
   lep_etconerel20__80->SetBinError(19,0.2156384);
   lep_etconerel20__80->SetBinError(20,0.2356425);
   lep_etconerel20__80->SetMinimum(0.5);
   lep_etconerel20__80->SetMaximum(2);
   lep_etconerel20__80->SetEntries(233.6175);
   lep_etconerel20__80->SetDirectory(0);
   lep_etconerel20__80->SetStats(0);
   lep_etconerel20__80->SetMarkerStyle(20);
   lep_etconerel20__80->GetXaxis()->SetLabelFont(43);
   lep_etconerel20__80->GetXaxis()->SetLabelSize(25);
   lep_etconerel20__80->GetXaxis()->SetTitleSize(25);
   lep_etconerel20__80->GetXaxis()->SetTitleOffset(2);
   lep_etconerel20__80->GetXaxis()->SetTitleFont(43);
   lep_etconerel20__80->GetYaxis()->SetTitle("Data/MC");
   lep_etconerel20__80->GetYaxis()->SetNdivisions(505);
   lep_etconerel20__80->GetYaxis()->SetLabelFont(43);
   lep_etconerel20__80->GetYaxis()->SetLabelSize(25);
   lep_etconerel20__80->GetYaxis()->SetTitleSize(25);
   lep_etconerel20__80->GetYaxis()->SetTitleOffset(2);
   lep_etconerel20__80->GetYaxis()->SetTitleFont(43);
   lep_etconerel20__80->GetZaxis()->SetLabelFont(43);
   lep_etconerel20__80->GetZaxis()->SetLabelSize(25);
   lep_etconerel20__80->GetZaxis()->SetTitleSize(25);
   lep_etconerel20__80->GetZaxis()->SetTitleFont(43);
   lep_etconerel20__80->Draw("");
   TLine *line = new TLine(-0.1,1,0.4,1);

   ci = TColor::GetColor("#333333");
   line->SetLineColor(ci);
   line->SetLineStyle(2);
   line->Draw();
   line = new TLine(-0.1,0.952684,0.4,0.952684);
   line->SetLineStyle(3);
   line->Draw();
   Data/MC->Modified();
   lep_etconerel20->cd();
      tex = new TLatex(0.2,0.88,"ATLAS");
tex->SetNDC();
   tex->SetTextFont(72);
   tex->SetTextSize(0.03);
   tex->SetLineWidth(2);
   tex->Draw();
      tex = new TLatex(0.3,0.88,"Open Data");
tex->SetNDC();
   tex->SetTextFont(42);
   tex->SetTextSize(0.03);
   tex->SetLineWidth(2);
   tex->Draw();
      tex = new TLatex(0.95,0.05," etconerel20^{lep}");
tex->SetNDC();
   tex->SetTextAlign(33);
   tex->SetTextFont(42);
   tex->SetTextSize(0.03);
   tex->SetLineWidth(2);
   tex->Draw();
   
   TLegend *leg = new TLegend(0.75,0.69,0.9,0.9,NULL,"brNDC");
   leg->SetBorderSize(0);
   leg->SetTextFont(62);
   leg->SetLineColor(1);
   leg->SetLineStyle(1);
   leg->SetLineWidth(1);
   leg->SetFillColor(0);
   leg->SetFillStyle(1001);
   TLegendEntry *entry=leg->AddEntry("lep_etconerel20","Diboson","f");

   ci = TColor::GetColor("#fa7921");
   entry->SetFillColor(ci);
   entry->SetFillStyle(1001);
   entry->SetLineColor(1);
   entry->SetLineStyle(1);
   entry->SetLineWidth(1);
   entry->SetMarkerColor(1);
   entry->SetMarkerStyle(21);
   entry->SetMarkerSize(1);
   entry->SetTextFont(62);
   entry=leg->AddEntry("lep_etconerel20","DrellYan","f");

   ci = TColor::GetColor("#5bc0eb");
   entry->SetFillColor(ci);
   entry->SetFillStyle(1001);
   entry->SetLineColor(1);
   entry->SetLineStyle(1);
   entry->SetLineWidth(1);
   entry->SetMarkerColor(1);
   entry->SetMarkerStyle(21);
   entry->SetMarkerSize(1);
   entry->SetTextFont(62);
   entry=leg->AddEntry("lep_etconerel20","W","f");

   ci = TColor::GetColor("#e55934");
   entry->SetFillColor(ci);
   entry->SetFillStyle(1001);
   entry->SetLineColor(1);
   entry->SetLineStyle(1);
   entry->SetLineWidth(1);
   entry->SetMarkerColor(1);
   entry->SetMarkerStyle(21);
   entry->SetMarkerSize(1);
   entry->SetTextFont(62);
   entry=leg->AddEntry("lep_etconerel20","Z","f");

   ci = TColor::GetColor("#086788");
   entry->SetFillColor(ci);
   entry->SetFillStyle(1001);
   entry->SetLineColor(1);
   entry->SetLineStyle(1);
   entry->SetLineWidth(1);
   entry->SetMarkerColor(1);
   entry->SetMarkerStyle(21);
   entry->SetMarkerSize(1);
   entry->SetTextFont(62);
   entry=leg->AddEntry("lep_etconerel20","stop","f");

   ci = TColor::GetColor("#fde74c");
   entry->SetFillColor(ci);
   entry->SetFillStyle(1001);
   entry->SetLineColor(1);
   entry->SetLineStyle(1);
   entry->SetLineWidth(1);
   entry->SetMarkerColor(1);
   entry->SetMarkerStyle(21);
   entry->SetMarkerSize(1);
   entry->SetTextFont(62);
   entry=leg->AddEntry("lep_etconerel20","ttbar","f");

   ci = TColor::GetColor("#9bc53d");
   entry->SetFillColor(ci);
   entry->SetFillStyle(1001);
   entry->SetLineColor(1);
   entry->SetLineStyle(1);
   entry->SetLineWidth(1);
   entry->SetMarkerColor(1);
   entry->SetMarkerStyle(21);
   entry->SetMarkerSize(1);
   entry->SetTextFont(62);
   entry=leg->AddEntry("lep_etconerel20","Data","p");
   entry->SetLineColor(1);
   entry->SetLineStyle(1);
   entry->SetLineWidth(1);
   entry->SetMarkerColor(1);
   entry->SetMarkerStyle(20);
   entry->SetMarkerSize(1);
   entry->SetTextFont(62);
   leg->Draw();
   lep_etconerel20->Modified();
   lep_etconerel20->cd();
   lep_etconerel20->SetSelected(lep_etconerel20);
}
