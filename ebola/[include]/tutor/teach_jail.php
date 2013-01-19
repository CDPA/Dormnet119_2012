
<?php	// [Info.] The following code will be included in main page : div class "content"
?>
		<form action="teach.php" >
			<input type="submit" value="BACK">
		</form>
		<div>
			<ul>
				<li>超量
					<ul>
						<li>說明：<br/>單日上傳累計流量大於6GB時(校內互傳不算)，即行封鎖。</li>
						<li>解法：<br/>七天後系統自動解除，不需申請解除封鎖。</li>
					</ul>
				</li>
				<br/>
				
				<li>蓄意超量
					<ul>
						<li>說明：<br/>以任何方式逃避系統檢查的用戶，例如：更改IP、持續換網路孔等。</li>
						<li>解法：<br/>30天後系統自動解除，不需申請解除封鎖。</li>
					</ul>
				</li>
				<br/>
				
				<li><!--更改連結 ?--><a name="section_wrongip"></a>IP設定錯誤(棟別-房號A 錯用 棟別-房號B IP)
					<ul>
						<li>說明：<br/>當系統偵測到使用者未依規定設定分配的IP時，將自動封鎖。若為同寢室友錯用，不會被封鎖，但會造成網路不穩定。</li>
						<li>解法：<br/>Step 1：請查詢<a href="http://dormnet119.cdpa.nsysu.edu.tw/?action=Tuition&amp;type=QueryIPInfomation" target="_blank" title="查詢IP設定值">IP設定值</a> 或 <a href="http://wiki.cdpa.nsysu.edu.tw/Dorms_ip" target="_blank" title="查詢IP分配表">IP分配表</a> ，設定成正確的IP <span style="color: blue;">(重設時請不要搶同寢室友IP)</span>。<br/>
									<br/>Step 2：設回正確IP後，系統會自動解鎖，不需申請解除封鎖。</li>
						<li>請注意：若發生下列情況，代表系統判斷錯誤。請以報修單告知我們，造成不便請見諒。
							<ul>
								<li>房號A<span style="color: red;">不是</span>自己的房間</li>
								<li>房號B<span style="color: red;">是</span>自己的房間</li>
							</ul>
						</li>
					</ul>
				</li>
				<br/>
				
				<li><!--更改連結 ?--><a name="section_iprob"></a>搶IP(被搶的IP)
					<ul>
						<li>說明：<br/>當收到使用者的檢舉信並查證屬實後，即行封鎖。</li>
						<li>解法：<br/>請填寫報修單申請解除封鎖。</li>
					</ul>
				</li>
				<br/>
				
				<li><!--更改連結 ?--><a name="section_edureport"></a>教育部來函:封鎖原因(檢舉信日期)
					<ul>
						<li>說明：<br/>當收到國內外各單位轉寄給教育部的檢舉信時，即行封鎖。</li>
						<li>若原因為SPAM、OPEN PROXY：
							<ul>
								<li>解法：<br/>Step 1：重灌或調整系統至停止發送(可參考大量掃描或中毒的步驟)。
											<br/>Step 2：請至計中應用組解釋原因。
											<br/>Step 3：直接由計中解除封鎖，不需再次申請。</li>
							</ul>
						</li>
						<li>若為侵權：
							<ul>
								<li>解法：<br/>Step 1：請至計中應用組解釋原因。
											<br/>Step 2：直接由計中解除封鎖，不需再次申請。</li>
							</ul>
						</li>
					</ul>
				</li>
				<br/>
				
				<li><!--更改連結 ?--><a name="section_scan"></a>大量掃描或中毒
					<ul>
						<li>說明：<br/>十分鐘內對超過300臺不同主機發送ICMP ECHO封包，行為疑似中毒，但也有可能是P2P軟體所造成。</li>
						<li>若為中毒：
							<ul>
								<li>解法：<br/>Step 1：更新病毒碼、移除病毒或是直接重灌系統。
											<br/>Step 2：在本網站填寫報修單申請解除封鎖，說明已清除病毒。</li>
								<li>請注意：掃毒完畢沒有中毒並不代表一定沒有中毒，如果解除封鎖後又再被封鎖，請重灌系統。</li>
								<li>請注意：掃毒完畢後並不代表系統一定安全，若解除封鎖後又再度被封鎖，請重灌系統。</li>
							</ul>
						</li>
						<li>若為P2P軟體所造成：
							<ul>
								<li>解法：<br/>Step 1：請移除該軟體。
											<br/>Step 2：填寫報修單申請解除封鎖，說明已移除軟體。</li>
							</ul>
						</li>
					</ul>
				</li>
				<br/>
				
				<li>大量傳送信件(SPAM)
					<ul>
						<li>說明：<br/>十分鐘內與超過30個不同的郵件主機連線，行為疑似中木馬被利用發送廣告信。</li>
						<li>解法：<br/>Step 1：更新病毒碼、移除病毒或木馬、或是直接重灌系統。
									<br/>Step 2：在本網站填寫報修單申請解除封鎖，說明已清除病毒或木馬。</li>
						<li>請注意：掃毒完畢後並不代表系統一定安全，若解除封鎖後又再度被封鎖，請重灌系統。</li>
					</ul>
				</li>
				<br/>
				
				<li>網路卡卡號錯誤
					<ul>
						<li>說明：<br/>您所使用的網路卡驅動程式有問題，或是網卡本身有問題，送出的卡號是錯誤的，會造成您自己與其他相同卡號的人網路不穩定。</li>
						<li>解法：<br/>Step 1：更新驅動程式，或是更換網卡。
									<br/>Step 2：填寫報修單申請解除封鎖。</li>
					</ul>
				</li>
				<br/>
				
				<li>電費缺繳
					<ul>
						<li>說明：<br/>依據98年6月學生宿舍管理執行會議決議通過，未依規定期限內繳交電費者，停止宿舍網路使用權利。</li>
						<li>解法：<br/>請持繳費收據至宿舍服務中心填寫資料（辦理週期：每週一、四中午12時前），申請恢復網路使用權後，於每週一、四下午6時恢復。</li>
					</ul>
				</li>
				
			</ul>
		</div>
