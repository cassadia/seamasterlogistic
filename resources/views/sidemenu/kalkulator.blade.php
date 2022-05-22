@extends('utama')

@section('title')
    Kalkulator | SEAMASTER LOGISTICS
@endsection

@section('konten')

<head>
	<link rel='stylesheet' id='elementor-post-665-css' href="{!! asset('wp-content/uploads/elementor/css/post-665d976.css?ver=1651077389') !!}" type='text/css' media='all' />
</head>
	
	<div data-elementor-type="wp-page" data-elementor-id="665" class="elementor elementor-665">
		<div class="elementor-inner">
			<div class="elementor-section-wrap">
				<section
					class="elementor-section elementor-top-section elementor-element elementor-element-7b5b8c0b elementor-section-height-min-height elementor-section-boxed elementor-section-height-default elementor-section-items-middle"
					data-id="7b5b8c0b" data-element_type="section"
					data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
					<div class="elementor-background-overlay"></div>
					<div class="elementor-container elementor-column-gap-default">
						<div class="elementor-row">
							<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-3aca82e2"
								data-id="3aca82e2" data-element_type="column">
								<div class="elementor-column-wrap">
									<div class="elementor-widget-wrap">
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<section
					class="elementor-section elementor-top-section elementor-element elementor-element-73f989d7 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
					data-id="73f989d7" data-element_type="section"
					data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
					<div class="elementor-container elementor-column-gap-default">
						<div class="elementor-row">
							<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-26803bc3"
								data-id="26803bc3" data-element_type="column"
								data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
								<div class="elementor-column-wrap elementor-element-populated">
									<div class="elementor-widget-wrap">
										<div class="elementor-element elementor-element-1f888fdc elementor-widget elementor-widget-heading"
											data-id="1f888fdc" data-element_type="widget"
											data-widget_type="heading.default">
											<div class="elementor-widget-container">
												<h2 class="elementor-heading-title elementor-size-default">Hitung Biaya
													Pengiriman</h2>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-115648d8"
								data-id="115648d8" data-element_type="column"
								data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
								<div class="elementor-column-wrap elementor-element-populated">
									<div class="elementor-widget-wrap">
										<div class="elementor-element elementor-element-4bd28565 elementor-widget elementor-widget-heading"
											data-id="4bd28565" data-element_type="widget"
											data-widget_type="heading.default">
											<div class="elementor-widget-container">
												<h2 class="elementor-heading-title elementor-size-default">pilih negara
												</h2>
											</div>
										</div>
										<section
											class="elementor-section elementor-inner-section elementor-element elementor-element-3784c78a elementor-section-boxed elementor-section-height-default elementor-section-height-default"
											data-id="3784c78a" data-element_type="section">
											<div class="elementor-container elementor-column-gap-default">
												<div class="elementor-row">
													<div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-82b269b"
														data-id="82b269b" data-element_type="column">
														<div class="elementor-column-wrap elementor-element-populated">
															<div class="elementor-widget-wrap">
																<div class="elementor-element elementor-element-353e40bc bendera elementor-widget elementor-widget-image"
																	data-id="353e40bc" data-element_type="widget"
																	id="cinabtn" data-widget_type="image.default">
																	<div class="elementor-widget-container">
																		<div class="elementor-image">
																			<img width="200" height="130"
																				src="../wp-content/uploads/2021/12/New-Project-21.png"
																				class="attachment-large size-large"
																				alt="" loading="lazy" />
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-2e731e97"
														data-id="2e731e97" data-element_type="column">
														<div class="elementor-column-wrap elementor-element-populated">
															<div class="elementor-widget-wrap">
																<div class="elementor-element elementor-element-7a836b04 bendera elementor-widget elementor-widget-image"
																	data-id="7a836b04" data-element_type="widget"
																	id="hkbtn" data-widget_type="image.default">
																	<div class="elementor-widget-container">
																		<div class="elementor-image">
																			<img width="800" height="533"
																				src="../wp-content/uploads/2021/12/Flag_of_Hong_Kong.svg.png"
																				class="attachment-large size-large"
																				alt="" loading="lazy"
																				srcset="https://seamasterlogistic.com/wp-content/uploads/2021/12/Flag_of_Hong_Kong.svg.png 800w, https://seamasterlogistic.com/wp-content/uploads/2021/12/Flag_of_Hong_Kong.svg-300x200.png 300w, https://seamasterlogistic.com/wp-content/uploads/2021/12/Flag_of_Hong_Kong.svg-768x512.png 768w"
																				sizes="(max-width: 800px) 100vw, 800px" />
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-596ec2b4"
														data-id="596ec2b4" data-element_type="column">
														<div class="elementor-column-wrap elementor-element-populated">
															<div class="elementor-widget-wrap">
																<div class="elementor-element elementor-element-256836e2 bendera elementor-widget elementor-widget-image"
																	data-id="256836e2" data-element_type="widget"
																	id="thaibtn" data-widget_type="image.default">
																	<div class="elementor-widget-container">
																		<div class="elementor-image">
																			<img width="200" height="130"
																				src="../wp-content/uploads/2021/12/New-Project-23.png"
																				class="attachment-large size-large"
																				alt="" loading="lazy" />
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-2ce0d8ba"
														data-id="2ce0d8ba" data-element_type="column">
														<div class="elementor-column-wrap elementor-element-populated">
															<div class="elementor-widget-wrap">
																<div class="elementor-element elementor-element-38b8ac7 bendera elementor-widget elementor-widget-image"
																	data-id="38b8ac7" data-element_type="widget"
																	id="sgbtn" data-widget_type="image.default">
																	<div class="elementor-widget-container">
																		<div class="elementor-image">
																			<img width="200" height="130"
																				src="../wp-content/uploads/2021/12/New-Project-19.png"
																				class="attachment-large size-large"
																				alt="" loading="lazy" />
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</section>
										<section
											class="elementor-section elementor-inner-section elementor-element elementor-element-166b7fd6 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
											data-id="166b7fd6" data-element_type="section">
											<div class="elementor-container elementor-column-gap-default">
												<div class="elementor-row">
													<div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-7cb2e18f"
														data-id="7cb2e18f" data-element_type="column">
														<div class="elementor-column-wrap elementor-element-populated">
															<div class="elementor-widget-wrap">
																<div class="elementor-element elementor-element-4268a0d4 elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
																	data-id="4268a0d4" data-element_type="widget"
																	data-widget_type="divider.default">
																	<div class="elementor-widget-container">
																		<div class="elementor-divider">
																			<span class="elementor-divider-separator">
																			</span>
																		</div>
																	</div>
																</div>
																<div class="elementor-element elementor-element-2f95a81d elementor-hidden-desktop elementor-hidden-tablet elementor-hidden-mobile elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
																	data-id="2f95a81d" data-element_type="widget"
																	data-widget_type="divider.default">
																	<div class="elementor-widget-container">
																		<div class="elementor-divider">
																			<span class="elementor-divider-separator">
																			</span>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-3ec1869d"
														data-id="3ec1869d" data-element_type="column">
														<div class="elementor-column-wrap elementor-element-populated">
															<div class="elementor-widget-wrap">
																<div class="elementor-element elementor-element-2643c79c elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
																	data-id="2643c79c" data-element_type="widget"
																	data-widget_type="divider.default">
																	<div class="elementor-widget-container">
																		<div class="elementor-divider">
																			<span class="elementor-divider-separator">
																			</span>
																		</div>
																	</div>
																</div>
																<div class="elementor-element elementor-element-7d385630 elementor-hidden-desktop elementor-hidden-tablet elementor-hidden-mobile elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
																	data-id="7d385630" data-element_type="widget"
																	data-widget_type="divider.default">
																	<div class="elementor-widget-container">
																		<div class="elementor-divider">
																			<span class="elementor-divider-separator">
																			</span>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-6cd9f796"
														data-id="6cd9f796" data-element_type="column">
														<div class="elementor-column-wrap elementor-element-populated">
															<div class="elementor-widget-wrap">
																<div class="elementor-element elementor-element-784e5751 elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
																	data-id="784e5751" data-element_type="widget"
																	data-widget_type="divider.default">
																	<div class="elementor-widget-container">
																		<div class="elementor-divider">
																			<span class="elementor-divider-separator">
																			</span>
																		</div>
																	</div>
																</div>
																<div class="elementor-element elementor-element-3d2a7ca0 elementor-hidden-desktop elementor-hidden-tablet elementor-hidden-mobile elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
																	data-id="3d2a7ca0" data-element_type="widget"
																	data-widget_type="divider.default">
																	<div class="elementor-widget-container">
																		<div class="elementor-divider">
																			<span class="elementor-divider-separator">
																			</span>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-e8fe66"
														data-id="e8fe66" data-element_type="column">
														<div class="elementor-column-wrap elementor-element-populated">
															<div class="elementor-widget-wrap">
																<div class="elementor-element elementor-element-5f42e02c elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
																	data-id="5f42e02c" data-element_type="widget"
																	data-widget_type="divider.default">
																	<div class="elementor-widget-container">
																		<div class="elementor-divider">
																			<span class="elementor-divider-separator">
																			</span>
																		</div>
																	</div>
																</div>
																<div class="elementor-element elementor-element-5e0a94a7 elementor-hidden-desktop elementor-hidden-tablet elementor-hidden-mobile elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
																	data-id="5e0a94a7" data-element_type="widget"
																	data-widget_type="divider.default">
																	<div class="elementor-widget-container">
																		<div class="elementor-divider">
																			<span class="elementor-divider-separator">
																			</span>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</section>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<section
					class="elementor-section elementor-top-section elementor-element elementor-element-378c725a elementor-section-boxed elementor-section-height-default elementor-section-height-default"
					data-id="378c725a" data-element_type="section"
					data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
					<div class="elementor-container elementor-column-gap-default">
						<div class="elementor-row">
							<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-548e617b"
								data-id="548e617b" data-element_type="column"
								data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
								<div class="elementor-column-wrap elementor-element-populated">
									<div class="elementor-widget-wrap">
										<section
											class="elementor-section elementor-inner-section elementor-element elementor-element-15783798 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
											data-id="15783798" data-element_type="section">
											<div class="elementor-container elementor-column-gap-default">
												<div class="elementor-row">
													<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-5fa0ed15"
														data-id="5fa0ed15" data-element_type="column">
														<div class="elementor-column-wrap elementor-element-populated">
															<div class="elementor-widget-wrap">
																<div class="elementor-element elementor-element-27996ba5 elementor-button-align-end elementor-mobile-button-align-stretch elementor-widget elementor-widget-form"
																	data-id="27996ba5" data-element_type="widget"
																	data-settings="{&quot;button_width&quot;:&quot;40&quot;,&quot;step_next_label&quot;:&quot;Next&quot;,&quot;step_previous_label&quot;:&quot;Previous&quot;,&quot;button_width_mobile&quot;:&quot;100&quot;,&quot;step_type&quot;:&quot;number_text&quot;,&quot;step_icon_shape&quot;:&quot;circle&quot;}"
																	data-widget_type="form.default">
																	<div class="elementor-widget-container">
																		<form class="elementor-form" method="post"
																			id="hitung_pengiriman" name="Hitung_Barang">
																			<input type="hidden" name="post_id"
																				value="665" />
																			<input type="hidden" name="form_id"
																				value="27996ba5" />
																			<input type="hidden" name="referer_title"
																				value="Kalkulator | SEAMASTER LOGISTICS" />

																			<input type="hidden" name="queried_id"
																				value="665" />

																			<div
																				class="elementor-form-fields-wrapper elementor-labels-above">
																				<div
																					class="elementor-field-type-radio elementor-field-group elementor-column elementor-field-group-pengiriman elementor-col-100 elementor-sm-100 elementor-field-required">
																					<label for="form-field-pengiriman"
																						class="elementor-field-label">
																						Jalur Pengiriman </label>
																					<div
																						class="elementor-field-subgroup  elementor-subgroup-inline">
																						<span
																							class="elementor-field-option"><input
																								type="radio"
																								value="laut"
																								id="form-field-pengiriman-0"
																								name="form_fields[pengiriman]"
																								checked="checked"
																								required="required"
																								aria-required="true">
																							<label
																								for="form-field-pengiriman-0">Angkutan
																								Laut</label></span><span
																							class="elementor-field-option"><input
																								type="radio"
																								value="udara"
																								id="form-field-pengiriman-1"
																								name="form_fields[pengiriman]"
																								required="required"
																								aria-required="true">
																							<label
																								for="form-field-pengiriman-1">Angkutan
																								Udara</label></span>
																					</div>
																				</div>
																				<div
																					class="elementor-field-type-select elementor-field-group elementor-column elementor-field-group-kategori elementor-col-20 elementor-sm-100 elementor-field-required">
																					<label for="form-field-kategori"
																						class="elementor-field-label">
																						Kategori Barang </label>
																					<div
																						class="elementor-field elementor-select-wrapper ">
																						<select
																							name="form_fields[kategori]"
																							id="form-field-kategori"
																							class="elementor-field-textual elementor-size-sm"
																							required="required"
																							aria-required="true">
																							<option value="4250000">Tas
																							</option>
																							<option value="4750000">
																								Sepatu</option>
																							<option value="4750000">Umum
																							</option>
																							<option value="5500000">
																								Lartas</option>
																							<option value="6000000">
																								Tentative</option>
																							<option value="5500000">Semi
																								Garment</option>
																							<option value="6000000">
																								Kosmetik, Makanan, Obat
																							</option>
																							<option value="6250000">
																								Garment</option>
																							<option value="9750000">
																								Textile</option>
																						</select>
																					</div>
																				</div>
																				<div
																					class="elementor-field-type-number elementor-field-group elementor-column elementor-field-group-berat elementor-col-20 elementor-sm-50 elementor-field-required">
																					<label for="form-field-berat"
																						class="elementor-field-label">
																						Berat (kg) </label>
																					<input type="number"
																						name="form_fields[berat]"
																						id="form-field-berat"
																						class="elementor-field elementor-size-sm  elementor-field-textual"
																						required="required"
																						aria-required="true" min=""
																						max="">
																				</div>
																				<div
																					class="elementor-field-type-number elementor-field-group elementor-column elementor-field-group-volume elementor-col-20 elementor-sm-50 elementor-field-required">
																					<label for="form-field-volume"
																						class="elementor-field-label">
																						Volume (m3) </label>
																					<input type="number"
																						name="form_fields[volume]"
																						id="form-field-volume"
																						class="elementor-field elementor-size-sm  elementor-field-textual"
																						required="required"
																						aria-required="true" min=""
																						max="">
																				</div>
																				<div
																					class="elementor-field-type-html elementor-field-group elementor-column elementor-field-group-field_71aebd7 elementor-col-40 elementor-sm-100">
																					<div></div>
																				</div>
																				<div
																					class="elementor-field-type-number elementor-field-group elementor-column elementor-field-group-panjang elementor-col-20 elementor-sm-33">
																					<label for="form-field-panjang"
																						class="elementor-field-label">
																						Panjang (cm) </label>
																					<input type="number"
																						name="form_fields[panjang]"
																						id="form-field-panjang"
																						class="elementor-field elementor-size-sm  elementor-field-textual"
																						min="" max="">
																				</div>
																				<div
																					class="elementor-field-type-number elementor-field-group elementor-column elementor-field-group-lebar elementor-col-20 elementor-sm-33">
																					<label for="form-field-lebar"
																						class="elementor-field-label">
																						Lebar (cm) </label>
																					<input type="number"
																						name="form_fields[lebar]"
																						id="form-field-lebar"
																						class="elementor-field elementor-size-sm  elementor-field-textual"
																						min="" max="">
																				</div>
																				<div
																					class="elementor-field-type-number elementor-field-group elementor-column elementor-field-group-tinggi elementor-col-20 elementor-sm-33">
																					<label for="form-field-tinggi"
																						class="elementor-field-label">
																						Tinggi (cm) </label>
																					<input type="number"
																						name="form_fields[tinggi]"
																						id="form-field-tinggi"
																						class="elementor-field elementor-size-sm  elementor-field-textual"
																						min="" max="">
																				</div>
																				<div
																					class="elementor-field-group elementor-column elementor-field-type-submit elementor-col-40 e-form__buttons elementor-sm-100">
																					<button type="submit"
																						class="elementor-button elementor-size-sm"
																						id="hitung_btn">
																						<span>
																							<span
																								class=" elementor-button-icon">
																							</span>
																							<span
																								class="elementor-button-text">HITUNG</span>
																						</span>
																					</button>
																				</div>
																			</div>
																		</form>
																	</div>
																</div>
																<div class="elementor-element elementor-element-1595ca06 elementor-widget__width-initial elementor-absolute elementor-widget-mobile__width-inherit grandtotal elementor-widget elementor-widget-heading"
																	data-id="1595ca06" data-element_type="widget"
																	id="grandtotal"
																	data-settings="{&quot;_position&quot;:&quot;absolute&quot;}"
																	data-widget_type="heading.default">
																	<div class="elementor-widget-container">
																		<h2
																			class="elementor-heading-title elementor-size-default">
																			Rp 0,00</h2>
																	</div>
																</div>
																<div class="elementor-element elementor-element-238eb2fe elementor-widget__width-initial elementor-absolute elementor-widget-mobile__width-inherit elementor-widget elementor-widget-heading"
																	data-id="238eb2fe" data-element_type="widget"
																	data-settings="{&quot;_position&quot;:&quot;absolute&quot;}"
																	data-widget_type="heading.default">
																	<div class="elementor-widget-container">
																		<h2
																			class="elementor-heading-title elementor-size-default">
																			Estimasi Ongkir Sampai Jakarta :</h2>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</section>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<section
					class="elementor-section elementor-top-section elementor-element elementor-element-6c8c6113 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
					data-id="6c8c6113" data-element_type="section"
					data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
					<div class="elementor-container elementor-column-gap-default">
						<div class="elementor-row">
							<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-211f39b5"
								data-id="211f39b5" data-element_type="column">
								<div class="elementor-column-wrap elementor-element-populated">
									<div class="elementor-widget-wrap">
										<div class="elementor-element elementor-element-17dc0a1e elementor-widget elementor-widget-heading"
											data-id="17dc0a1e" data-element_type="widget"
											data-widget_type="heading.default">
											<div class="elementor-widget-container">
												<h2 class="elementor-heading-title elementor-size-default">Biaya yang
													kamu berikan All In artinya tidak ada biaya lagi sampai Jakarta
													dan<br> pengurusan dokumen, surat, dan bea cukai. Semua kami yang
													aturkan.</h2>
											</div>
										</div>
										<div class="elementor-element elementor-element-162a3593 elementor-widget elementor-widget-heading"
											data-id="162a3593" data-element_type="widget"
											data-widget_type="heading.default">
											<div class="elementor-widget-container">
												<h2 class="elementor-heading-title elementor-size-default">*syarat dan
													ketentuan berlaku</h2>
											</div>
										</div>
										<div class="elementor-element elementor-element-41c44b4d elementor-mobile-align-center elementor-widget elementor-widget-button"
											data-id="41c44b4d" data-element_type="widget"
											data-widget_type="button.default">
											<div class="elementor-widget-container">
												<div class="elementor-button-wrapper">
													<a href="../seamaster-contact/index.html"
														class="elementor-button-link elementor-button elementor-size-sm"
														role="button">
														<span class="elementor-button-content-wrapper">
															<span class="elementor-button-text">contact us</span>
														</span>
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>
		</div>
	</div>

@endsection